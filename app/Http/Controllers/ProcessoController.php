<?php

namespace App\Http\Controllers;

use App\Models\Comarca;
use App\Models\Processo;
use App\Models\Vara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class ProcessoController extends Controller
{
    /**
     * Salva um processo
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validados = $request->validate([
            'numero'=>'required|string|max:20',
            'valor_causa'=>'nullable|decimal:2',
            'valor_condenacao'=>'nullable|decimal:2',
            'justica_gratuita'=>'nullable|boolean',
            'prioridade'=>'nullable|boolean',
            'instancia'=>'nullable|string|max:1',
            'numCNJ'=>'required|string|max:20|min:20',
            'data_criacao'=>'required|date',
            'data_distribuicao'=>'nullable|date',
            'classe_judicial'=>'required|integer',
            'tribunal'=>'required|integer',
            'comarca'=>'nullable|string',
            'vara'=>'required|string'
        ]);

        $processo = new Processo();

        try{
            DB::transaction(function () use ($validados, $processo) {
                $comarca = null;
                if (!is_null($validados['comarca'])) {
                    $comarca = new Comarca();
                    $comarca->fill([
                        'nome' => $validados['comarca'],
                        'tribunal' => $validados['tribunal'],
                    ]);

                    if (!$comarca->saveOrFail()) {
                        DB::rollBack();
                        return response()->json(['msg' => 'Erro interno']);
                    }
                    $validados['comarca'] = $comarca->id;
                }

                $vara = new Vara();
                $vara->fill([
                    'nome' => $validados['vara'],
                    'comarca' => $comarca?->id
                ]);

                if (!$vara->saveOrFail()) {
                    DB::rollBack();
                    return response()->json(['msg' => 'Erro interno']);
                }
                $validados['vara'] = $vara->id;

                $processo->fill($validados);

                if ($processo->saveOrFail()) {
                    DB::commit();
                } else {
                    DB::rollBack();
                    return response()->json(['msg' => 'Erro interno'], 500);
                }
            });

            return response()->json(Processo::find($processo->id), 201);
        }
        catch (ValidationException $e)
        {
            return response()->json(['msg'=>'dados inválidos'], 422);
        }
        catch (\Exception $e)
        {
            return response()->json(['msg'=>'Erro interno'.$e->getMessage()], 500);
        }
    }
}
