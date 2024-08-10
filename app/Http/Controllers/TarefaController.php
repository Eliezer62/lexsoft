<?php

namespace App\Http\Controllers;

use App\Models\Advogado;
use App\Models\Prazo;
use App\Models\Tarefa;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class TarefaController extends Controller
{
    public function index($xid)
    {
        $adv = Advogado::firstWhere('xid', $xid);
        $tarefas = DB::table('tarefas')->select(['xid', 'assunto','descricao', 'status'])
        ->selectRaw("(SELECT json_build_object('inicio',inicio, 'fim', fim) FROM prazos WHERE prazos.tarefa = tarefas.id) AS prazo")
        ->where('responsavel',$adv->id)
        ->where('deleted_at', null)
        ->orderBy('updated_at', 'DESC')->get();
        $tarefas->map(function ($tarefa) {
            $tarefa->prazo = json_decode($tarefa->prazo);
        });

        return response()->json($tarefas, 200);
    }

    public function store(Request $request)
    {
        try {
            $validado = $request->validate([
                'assunto' => 'required|max:255',
                'descricao' => 'nullable',
                'responsavel' => 'required',
                'inicio' => 'nullable|date',
                'fim' => 'nullable|date'
            ]);
            $prazo = new Prazo();
            $tarefa = new Tarefa();

            $validado['responsavel'] = Advogado::firstWhere('xid', $validado['responsavel'])?->id;
            if(is_null($validado['responsavel'])) return response(status: 404);

            DB::transaction(function () use ($validado, $prazo, $tarefa) {
                $tarefa->fill($validado);
                $tarefa->status = 'nova';
                if($tarefa->saveOrFail())
                {
                    $validado['descricao'] = null;
                    $prazo->fill($validado);
                    $prazo->tarefa = $tarefa->id;
                    if($prazo->saveOrFail())
                        DB::commit();

                    else
                    {
                        DB::rollBack();
                        throw new \Exception("Erro ao salvar tarefa");
                    }
                }
                else
                {
                    DB::rollBack();
                    throw new \Exception("Erro ao salvar tarefa");
                }
            });

            return response()->json($tarefa, 201);
        }
        catch (ValidationException $e)
        {
            return response()->json(['msg'=>'Campo assunto é obrigatório'.$e->getMessage()], 422);
        }
        catch (\Exception $e)
        {
            return response()->json(['msg'=>'Erro interno'], 500);
        }
    }

    public function update(Request $request, string $xid)
    {
        try {
            $validado = $request->validate([
                'assunto' => 'string|max:255',
                'descricao' => 'nullable|string',
                'inicio' => 'nullable|date',
                'fim' => 'nullable|date'
            ]);

            $tarefa = Tarefa::firstWhere('xid', $xid);
            if(is_null($tarefa)) return response(status: 404);

            $tarefa->fill($validado);
            $tarefa->save();
            $validado['descricao'] = null;
            $tarefa->prazo->fill($validado);
            $tarefa->prazo->save();

            return response()->json($tarefa, 201);
        }
        catch (ValidationException $e)
        {
            return response()->json(['msg'=>'dados inválidos enviado'], 422);
        }
        catch (QueryException $e)
        {
            if($e->getCode()==23514) return response()->json(['msg'=>'data de início deve ser menor que a final'], 422);
            else return  response()->json(['msg'=>'Erro interno'], 500);
        }
        catch (\Exception $e)
        {
            return response()->json(['msg'=>'Erro interno'], 500);
        }
    }


    public function delete(string $xid)
    {
        Tarefa::firstWhere('xid', $xid)?->delete();

        return response(status: 200);
    }

    public function status(Request $request, string $xid)
    {
        try{
            $valido = $request->validate(['status' => 'required']);

            $tarefa = Tarefa::firstWhere('xid', $xid);
            if (is_null($tarefa)) return response(status: 404);
            $tarefa->fill($valido);
            $tarefa['updated_at'] = Carbon::now();

            $tarefa->save();

            return response(status: 200);
        }
        catch (ValidationException $e)
        {
            return response()->json(['msg'=>'dados inválidos enviado'], 422);
        }
        catch (\Exception $e)
        {
            return response()->json(['msg'=>'erro interno'], 500);
        }
    }
}
