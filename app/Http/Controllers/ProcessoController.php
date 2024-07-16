<?php

namespace App\Http\Controllers;

use App\Models\Advogado;
use App\Models\ClientePessoaFis;
use App\Models\ClientePessoaJur;
use App\Models\Comarca;
use App\Models\Processo;
use App\Models\Vara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class ProcessoController extends Controller
{
    public function index()
    {
        $processos = DB::select('
            SELECT
                p.xid, p.numero, p."numCNJ", t.nome AS tribunal
                FROM processos p JOIN tribunais t ON t.id = tribunal;
        ');

        return response()->json($processos, 200);
    }

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
            DB::transaction(function () use ($validados, $processo, $request) {
                $comarca = null;
                if ($request->has('comarca')) {
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
                    'comarca' => (!is_null($comarca))?$comarca->id:null
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

    /**
     * Vincula advogados e partes a um processo, rota do controlador
     * @param Request $request
     * @param $xid
     * @return \Illuminate\Http\JsonResponse
     */
    public function vincular(Request $request, $xid)
    {
        try
        {
            $validados = $request->validate([
                'advogados' => 'nullable|array',
                'partes' => 'nullable|array',
            ]);

            $processo = Processo::firstWhere('xid', $xid);
            if ($request->has('advogados'))
                $this->vincularAdvogados($processo, $validados['advogados']);

            if ($request->has('partes'))
                $this->vincularPartes($processo, $validados['partes']);

            return response()->json([], 200);
        }
        catch (\Exception $e)
        {
            return response()->json(['msg'=>'Erro interno'.$e->getMessage()], 500);
        }
    }

    /**
     * Vincular um array de clientes
     * @param $processo
     * @param array $clientes
     * @return void
     */
    private function vincularPartes($processo, array $partes)
    {
        foreach ($partes as $index=>$parte)
        {
            if($parte['tipo']=='fisico')
            {
                $cliente = ClientePessoaFis::firstWhere('xid', $parte['cliente']);
                $processo->partes()->attach($cliente, ['qualificacao'=>$parte['qualificacao']]);
            }
            else if($parte['tipo']=='juridico')
            {
                $cliente = ClientePessoaJur::firstWhere('xid', $parte['cliente']);
                $processo->partes_jur()->attach($cliente, ['qualificacao'=>$parte['qualificacao']]);
            }
        }

    }

    /**
     * Vincular um array de advogados a um processo
     * @param Processo $processo
     * @param array $advogados
     * @return void
     */
    private function vincularAdvogados(Processo $processo, array $advogados): void
    {
        foreach ($advogados as $advogado) {
            $advogado = Advogado::firstWhere('xid', $advogado);
            $processo->advogados()->attach($advogado);
        }
    }
}
