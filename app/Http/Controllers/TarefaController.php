<?php

namespace App\Http\Controllers;

use App\Models\Advogado;
use App\Models\Prazo;
use App\Models\Tarefa;
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
        ->where('deleted_at', null)->get();
        $tarefas->map(function ($tarefa) {
            $tarefa->prazo = json_decode($tarefa->prazo);
        });

        return response()->json($tarefas, 200);
    }

    public function store(Request $request)
    {
        try {
            $validado = $request->validate([
                'assunto' => 'required|string|max:255',
                'descricao' => 'sometimes|string',
                'responsavel' => 'required',
                'inicio' => 'date',
                'fim' => 'date'
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
            return response()->json(['msg'=>'Campo descrição é obrigatório'], 422);
        }
        catch (\Exception $e)
        {
            return response()->json(['msg'=>'Erro interno'.$e->getMessage()], 500);
        }
    }
}
