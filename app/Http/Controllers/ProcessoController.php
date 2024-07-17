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
                FROM processos p JOIN tribunais t ON t.id = tribunal
                WHERE p.deleted_at IS NULL ORDER BY p.updated_at DESC;
        ');

        return response()->json($processos, 200);
    }

    public function show(string $xid)
    {
        $processo = Processo::select([
            'xid','numero', 'numCNJ', 'prioridade', 'justica_gratuita',
            'valor_causa', 'valor_condenacao', 'instancia', 'classe_judicial',
            'processos.tribunal','data_criacao','data_distribuicao'
        ])
            ->selectRaw('(SELECT nome FROM comarcas WHERE comarcas.id = processos.comarca) as comarca')
            ->selectRaw('varas.nome as vara')
            ->join('varas', 'processos.vara', 'varas.id')
            ->firstWhere('xid', $xid);

        return response()->json($processo, 200);
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
     * Atualizar Processo
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, string $xid)
    {
        try{
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

            //Atualizar vara
            $processo = Processo::firstWhere('xid', $xid);
            $processo->vara()->first()->update(['nome'=>$validados['vara']]);

            //Atualizar comarca
            if(!is_null($processo->comarca))
                $processo->comarca()->first()->update(['nome'=>$validados['comarca']]);

            else if($request->has('comarca') && is_null($processo->comarca))
            {
                $comarca = Comarca::create(['nome'=>$validados['comarca'], 'tribunal'=>$validados['tribunal']]);
                $processo->update(['comarca'=>$comarca->id]);
            }

            if($request->has('comarca')) unset($validados['comarca']);
            if($request->has('vara')) unset($validados['vara']);

            $processo->update($validados);

            return response()->json($processo, 200);
        }
        catch (ValidationException $e)
        {
            return response()->json(['msg'=>'dados inválidos enviado'], 422);
        }
        catch (\Exception $e)
        {
            return response()->json(['msg'=>'Erro interno'.$e->getMessage()], 500);
        }
    }

    /**
     * Remover processo
     * @param string $xid
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(string $xid)
    {
        $processo = Processo::firstWhere('xid', $xid);
        if(!is_null($processo)) $processo->delete();

        return response()->json([], 200);
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
            return response()->json(['msg'=>'Erro interno'], 500);
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
            $cliente = ClientePessoaFis::firstWhere('xid', $parte['cliente']);
            if($cliente)
            {
                $processo->partes()->attach($cliente, ['qualificacao'=>$parte['qualificacao']]);
            }
            $cliente = ClientePessoaJur::firstWhere('xid', $parte['cliente']);
            if($cliente)
            {
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

    /**
     * Get partes de um processo
     * @param string $xid
     * @return \Illuminate\Http\JsonResponse
     */
    public function getPartes(string $xid)
    {
        $partes = DB::select('
        (SELECT c.xid as xid, partes.qualificacao FROM partes
         JOIN clientes_pessoa_fis c ON c.id = partes.clientefis
        JOIN processos p ON p.id = partes.processo
        WHERE p.xid = :xid) UNION ALL
        (SELECT c.xid, partes_jur.qualificacao FROM partes_jur
        JOIN clientes_pessoa_jur c ON c.id = partes_jur.clientejur
        JOIN processos p ON p.id = partes_jur.processo
        WHERE p.xid = :xid)
        ', ['xid'=>$xid]);

        return response()->json($partes, 200);
    }

    /**
     * Get Advogados de um processo
     * @param string $xid
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAdvogados(string $xid)
    {
        $advogados = DB::select('SELECT DISTINCT(a.xid) FROM representa r
        JOIN advogados a on r.advogado = a.id
        JOIN processos p on r.processo = p.id
        WHERE p.xid = :xid
        ', ['xid'=>$xid]);

        return response()->json($advogados, 200);
    }

    public function updatePartesEAdvs(Request $request, string $xid)
    {
        $validados = $request->validate([
            'partes' => 'nullable|array',
            'advogados' => 'nullable|array'
        ]);
        $processo = Processo::firstWhere('xid', $xid);
        if($request->has('advogados'))
            $this->updateAdvs($processo, $validados['advogados']);

        if($request->has('partes'))
            $this->updatePartes($processo, $validados['partes']);

        return response()->json([], 200);
    }

    public function updatePartes(Processo $processo, array $partes)
    {
        $clientesfis = [];
        $clientesjur = [];
        foreach ($partes as $parte)
        {
            $cliente = ClientePessoaFis::firstWhere('xid', $parte['cliente']);
            if($cliente)
                $clientesfis[$cliente->id] =  ['qualificacao'=>$parte['qualificacao']];
            $cliente = ClientePessoaJur::firstWhere('xid', $parte['cliente']);
            if($cliente)
                $clientesjur[$cliente->id] = ['qualificacao'=>$parte['qualificacao']];
        }

        $processo->partes()->sync($clientesfis);
        $processo->partes_jur()->sync($clientesjur);
    }


    public function updateAdvs(Processo $processo, array $advs)
    {
        $advogados = [];
        foreach ($advs as $index=>$adv)
        {
            $advogados[] = Advogado::firstWhere('xid', $adv)->id;
        }

        $processo->advogados()->sync($advogados);
    }
}
