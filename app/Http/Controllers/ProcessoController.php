<?php

namespace App\Http\Controllers;

use App\Models\Advogado;
use App\Models\ClientePessoaFis;
use App\Models\ClientePessoaJur;
use App\Models\Comarca;
use App\Models\Evento;
use App\Models\Prazo;
use App\Models\Processo;
use App\Models\Vara;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;

class ProcessoController extends Controller
{
    public function index()
    {
        $advogado = Auth::user();

        if($advogado->grupo=='administrador')
        {
            $processos = DB::select('
                SELECT
                    p.xid, p.numero, p."numCNJ", t.nome AS tribunal, v.nome as vara,
                    (SELECT c.nome FROM comarcas c WHERE c.id = p.comarca) AS comarca,
                    (JSON_AGG(JSON_BUILD_OBJECT(\'parte\', CONCAT(vpp.cliente) ))) AS partes,
                    (JSON_AGG(JSON_BUILD_OBJECT(\'advogado\', CONCAT(advs.nome)))) AS advogados
                    FROM processos p JOIN tribunais t ON t.id = tribunal
                    JOIN varas v ON v.id = p.vara
                    LEFT JOIN view_partes_processo vpp ON vpp.processo = p.xid
                    LEFT JOIN representa r ON r.processo =  p.id
                    LEFT JOIN advogados advs ON advs.id = r.advogado
                    WHERE p.deleted_at IS NULL
                    GROUP BY p.xid, p.updated_at, p.xid, p.numero, p."numCNJ", t.nome, v.nome, (SELECT c.nome FROM comarcas c WHERE c.id = p.comarca) ORDER BY p.updated_at DESC;
            ');
        }
        else
        {
            $processos = DB::select('
            SELECT
                 p.xid, p.numero, p."numCNJ", t.nome AS tribunal, v.nome as vara,
                (SELECT c.nome FROM comarcas c WHERE c.id = p.comarca) AS comarca,
                (JSON_AGG(JSON_BUILD_OBJECT(\'parte\', CONCAT(vpp.cliente) ))) AS partes,
                (JSON_AGG(JSON_BUILD_OBJECT(\'advogado\', CONCAT(advs.nome)))) AS advogados
            FROM processos p
            JOIN tribunais t ON t.id = p.tribunal
            JOIN varas v ON v.id = p.vara
            LEFT JOIN view_partes_processo vpp ON vpp.processo = p.xid
			LEFT JOIN representa r ON r.processo = p.id
            LEFT JOIN advogados advs ON advs.id = r.advogado
            WHERE p.deleted_at IS NULL AND r.advogado = :argumento AND p.id = r.processo
            GROUP BY p.xid, p.updated_at, p.xid, p.numero, p."numCNJ", t.nome, v.nome, (SELECT c.nome FROM comarcas c WHERE c.id = p.comarca) ORDER BY p.updated_at DESC;
            ', ['argumento'=>$advogado->id]);
        }

        foreach ($processos as $processo)
        {
            $processo->partes = json_decode($processo->partes);
            $processo->advogados = json_decode($processo->advogados);
        }

        return response()->json($processos, 200);
    }

    public function show(string $xid)
    {
        $advogado = Auth::user();
        $processo = Processo::select([
            'xid','numero', 'numCNJ', 'prioridade', 'justica_gratuita',
            'valor_causa', 'valor_condenacao', 'instancia', 'classe_judicial',
            'processos.tribunal','data_criacao','data_distribuicao'
        ])
            ->selectRaw('(SELECT nome FROM comarcas WHERE comarcas.id = processos.comarca) as comarca')
            ->selectRaw('varas.nome as vara')
            ->join('varas', 'processos.vara', 'varas.id')
            ->join('representa', 'processos.id', 'representa.processo')
            ->where('representa.advogado', '=', $advogado->id)
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
            if($e->getCode()=='P0001')
                    return response()->json(['msg'=>'Valor de condenação deve ser menor que o valor da causa'], 400);

            elseif($e->getCode()=='P0002')
                return response()->json(['msg'=>'Data de criação deve ocorrer antes da data de distribuição'], 400);

            elseif($e->getCode()=='P0003')
                return response()->json(['msg'=>'Valor da causa deve ser positiva'], 400);

            elseif($e->getCode()=='P0004')
                return response()->json(['msg'=>'Valor de condenação deve ser positivo'], 400);

            elseif ($e->getCode()==23505)
                return response()->json(['msg'=>'Número do processo já existe'], 409);

            else {
                Log::error($e->getMessage());
                return response()->json(['msg' => 'Erro interno'], 500);
            }
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
            $usuario = Auth::user();
            if(!$processo->advogados->contains($usuario) && $usuario->grupo != 'administrador')
                return response()->json(['msg'=>'Ação não permitida'], 403);

            $processo->vara()->first()->update(['nome'=>$validados['vara']]);

            //Atualizar comarca
            if(!is_null($processo->comarca))
                $processo->comarca()->first()->update(['nome'=>$validados['comarca']]);

            else if($request->has('comarca') && is_null($processo->comarca) && !is_null($request->input('comarca')))
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
        catch (QueryException $e)
        {
            if($e->getCode()=='P0001')
                return response()->json(['msg'=>'Valor de condenação deve ser menor que o valor da causa'], 400);

            elseif($e->getCode()=='P0002')
                return response()->json(['msg'=>'Data de criação deve ocorrer antes da data de distribuição'], 400);

            elseif($e->getCode()=='P0003')
                return response()->json(['msg'=>'Valor da causa deve ser positiva'], 400);

            elseif($e->getCode()=='P0004')
                return response()->json(['msg'=>'Valor de condenação deve ser positivo'], 400);

            elseif ($e->getCode()==23505)
                return response()->json(['msg'=>'Número do processo já existe'], 409);

            else {
                Log::error($e->getMessage());
                return response()->json(['msg' => 'Erro interno'], 500);
            }
        }
        catch (\Exception $e)
        {
            Log::error($e->getMessage());
            return response()->json(['msg'=>'Erro interno'], 500);
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
        $usuario = Auth::user();
        if(!$processo->advogados->contains($usuario) && $usuario->grupo != 'administrador')
                return response()->json(['msg'=>'Ação não permitida'], 403);

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
            Log::error($e->getMessage());
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
        $usuario = Auth::user();
        $validados = $request->validate([
            'partes' => 'nullable|array',
            'advogados' => 'nullable|array'
        ]);
        $processo = Processo::firstWhere('xid', $xid);
        if(!$processo->advogados->contains($usuario) && $usuario->grupo != 'administrador')
                return response()->json(['msg'=>'Ação não permitida'], 403);

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


    public function visualizarProcesso(string $xid)
    {
        $usuario = Auth::user();
        $processo = Processo::firstWhere('xid', $xid);
        if(!$processo->advogados->contains($usuario) && $usuario->grupo != 'administrador')
                return response()->json(['msg'=>'Ação não permitida'], 403);

        $processos = DB::select('
        SELECT p.xid, p.numero, p."numCNJ", p.valor_causa, p.valor_condenacao,
        p.justica_gratuita, p.prioridade, p.instancia, p.data_criacao,
        p.data_distribuicao, concat(cj.id, \' \', cj.descricao) as classe_judicial,
        t.nome as tribunal, (SELECT nome FROM comarcas com WHERE com.id = p.comarca) as comarca,
        v.nome as vara,
        JSON_AGG(JSON_BUILD_OBJECT(\'cliente\', vpp.cliente, \'documento\', vpp.documento,
        \'qualificacao\', vpp.qualificacao
        )) AS partes

        FROM processos p
        JOIN classes_judiciais cj ON cj.id = p.classe_judicial
        JOIN tribunais t ON t.id = p.tribunal
        JOIN varas v ON v.id = p.vara
        JOIN view_partes_processo vpp ON vpp.processo = p.xid
        JOIN representa r ON r.processo = p.id

        WHERE xid = :xid
        GROUP BY p.xid, p.xid, p.numero, p."numCNJ", p.valor_causa, p.valor_condenacao, p.justica_gratuita, p.prioridade, p.instancia, p.data_criacao, p.data_distribuicao, concat(cj.id, \' \', cj.descricao), t.nome, (SELECT nome FROM comarcas com WHERE com.id = p.comarca), v.nome
        ', ['xid'=>$xid]);

        foreach ($processos as $processo)
        {
            $processo->partes = json_decode($processo->partes);
        }
        return response()->json($processos[0], 200);
    }

    /**
     * Lancar novo evento em um processo
     * @param Request $request
     * @param string $xid
     * @return \Illuminate\Http\JsonResponse
     */
    public function lancarEvento(Request $request, string $xid)
    {
        try{
            $usuario = Auth::user();
            $processo = Processo::firstWhere('xid', $xid);
            if(!$processo->advogados->contains($usuario) && $usuario->grupo != 'administrador')
                return response()->json(['msg'=>'Ação não permitida'], 403);

            $validados = $request->validate([
                'descricao'=>'required|string|max:255',
                'data'=>'required|date',
                'inicio'=>'sometimes|nullable|date',
                'fim'=>'sometimes|nullable|date'
            ]);

            $evento = Evento::create([
                'descricao'=>$validados['descricao'],
                'data'=>$validados['data'],
                'processo'=>$processo->id
            ]);

            if(is_null($evento)) throw new \Exception();

            if($request->has('inicio') && !is_null($validados['inicio']))
            {
                Prazo::create([
                    'inicio'=>$validados['inicio'],
                    'fim'=>$validados['fim'],
                    'evento'=>$evento->id
                ]);
            }

            return response()->json(['msg'=>'sucesso'], 200);
        }
        catch(ValidationException $e)
        {
            return response()->json(['msg'=>'Descrição e data são obrigatório, dados inválidos enviado'], 422);
        }
        catch (\Exception $e)
        {
            return response()->json(['msg'=>'Erro interno'], 500);
        }
    }


    public function getEventos(string $xid)
    {
        $usuario = Auth::user();
        $processo = Processo::firstWhere('xid', $xid);
        if(!$processo->advogados->contains($usuario) && $usuario->grupo != 'administrador')
                return response()->json(['msg'=>'Ação não permitida'], 403);

        $eventos = DB::select("
        SELECT ROW_NUMBER() OVER () AS ordem, e.xid, e.descricao, e.data, (SELECT inicio FROM prazos WHERE prazos.evento = e.id) as inicio,
        (SELECT fim FROM prazos p WHERE p.evento = e.id)
        FROM eventos e
        WHERE e.processo = :processo AND deleted_at IS NULL
        ORDER BY created_at DESC
        ", ['processo'=>$processo->id]);

        return response()->json($eventos, 200);
    }

    public function removerEvento(string $processo, string $xid)
    {
        $evento = Evento::firstWhere('xid', $xid);
        $processo = $evento->processo()->get()->first();
        $usuario = Auth::user();

        if(!$processo->advogados->contains($usuario) && $usuario->grupo != 'administrador')
                return response()->json(['msg'=>'Ação não permitida'], 403);

        if(!is_null($evento)) $evento->delete();

        return response()->json(status:200);
    }
}
