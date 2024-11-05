<?php

namespace App\Http\Controllers;

use App\Enum\FaseNegocio;
use App\Models\Advogado;
use App\Models\ClientePessoaFis;
use App\Models\ClientePessoaJur;
use App\Models\Contato;
use App\Models\Negocio;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;

/**
 * Controller para caso de uso negócio
 */
class NegocioController extends Controller
{
    /**
     * Persiste via serializacao um negocio
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|void
     */
    public function store(Request $request)
    {
        try{
            $validado = $request->validate([
                'descricao' => 'sometimes|nullable|string',
                'data' => 'required|date',
                'responsavel' => 'nullable|string',
                'valor'=>'required|numeric|min:0',
                'contatos'=>'sometimes|nullable|array',
            ]);

            $validado['responsavel'] = Advogado::firstWhere('xid', $validado['responsavel'])?->id;

            $negocio = new Negocio();
            DB::transaction(function () use ($validado, $request, $negocio) {
                $negocio->fill($validado);
                $negocio->saveOrFail();

                if($request->has('contatos'))
                {
                    foreach ($request->input('contatos')??[] as $contato)
                    {
                        if($contato['tipo']=='fisico')
                        {
                            $cliente = ClientePessoaFis::firstWhere('xid', $contato['value']);
                            if(!is_null($cliente))
                                $negocio->clientes()->attach($cliente->id);
                        }
                        else if($contato['tipo']=='juridico')
                        {
                            $cliente = ClientePessoaJur::firstWhere('xid', $contato['value']);
                            if(!is_null($cliente))
                                $negocio->clientesJur()->attach($cliente->id);
                        }
                    }
                }
                DB::commit();
            });

            return response()->json($negocio, 201);
        }
        catch (ValidationException $e)
        {
            DB::rollBack();
            return response()->json(['msg'=>'Dados obrigatórios não fornecidos ou inválidos'], 422);
        }
        catch (QueryException $e)
        {
            DB::rollBack();
            switch ($e->getCode()) {
                case 23514:
                    return response()->json(['msg'=>'A data do negócio não pode ser futura']);
            }
        }
        catch (\Exception $e)
        {
            DB::rollBack();
            return response()->json(['msg'=>'Erro interno'.$e], 500);
        }
    }

    /**
     * Retorna todos os negocios via serializacao
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $negocios = DB::select("
            WITH consulta_por_fase AS (
            SELECT n.fase as fase FROM negocios n
            GROUP BY n.fase)
            SELECT cf.fase, JSONB_AGG(DISTINCT JSONB_BUILD_OBJECT(
                'xid', n.xid,
                'descricao', n.descricao,
                'data', n.data,
                'responsavel', adv.nome,
                'fase', n.fase,
                'prioridade', n.prioridade,
                'valor', n.valor,
                'contatos', contatos_json.contatos
            )) as negocios
            FROM consulta_por_fase cf
            JOIN negocios n ON n.fase = cf.fase
            LEFT JOIN advogados adv on adv.id = n.responsavel
            LEFT JOIN contatos cont on n.id = cont.negocio
            LEFT JOIN view_negocio_contatos vnc ON vnc.negocio = n.id
            LEFT JOIN (
                SELECT
                    vnc.negocio,
                    JSONB_AGG(DISTINCT JSONB_BUILD_OBJECT(
                        'xid', vnc.xid,
                        'nome', vnc.nome,
                        'documento', vnc.documento,
                        'tipo', vnc.tipo
                    )) AS contatos
                FROM
                    view_negocio_contatos vnc
                GROUP BY vnc.negocio
            ) contatos_json ON contatos_json.negocio = n.id
            GROUP BY cf.fase
        ");

        foreach ($negocios as $fase) {
            $fase->negocios = json_decode($fase->negocios);
        }

        return response()->json($negocios);
    }

    /**
     * Retorna apenas um negocio na serializacao
     * @param String $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(String $id)
    {
        $negocio = DB::select("
        SELECT
            n.xid, n.descricao, n.data, n.fase, n.prioridade,
            n.valor, adv.nome as responsavel,
            JSONB_AGG(DISTINCT JSONB_BUILD_OBJECT(
                'nome', cf.nome,
                'cpf', cf.cpf,
                'email', cf.email,
                'telefone', tel.telefone

            )) as contatos,
            JSONB_AGG(DISTINCT JSONB_BUILD_OBJECT(
                'razao', cj.razao_social,
                'cnpj', cj.cnpj,
                'email', cj.email,
                'telefone', tel.telefone

            )) as contatosjur
        FROM negocios n
        LEFT JOIN advogados adv ON adv.id = n.responsavel
        LEFT JOIN contatos cont ON cont.negocio = n.id
        LEFT JOIN contatos_jur contj ON contj.negocio = n.id
        LEFT JOIN clientes_pessoa_fis cf ON cf.id = cont.cliente
        LEFT JOIN clientes_pessoa_jur cj ON cj.id = contj.cliente_jur
        LEFT JOIN (
            SELECT
                tel.pessoafis as cliente,
                tel.pessoajur as clientejur,
                JSONB_AGG(DISTINCT JSONB_BUILD_OBJECT(
                    'DDI', tel.ddi,
                    'DDD', tel.ddd,
                    'numero', tel.numero
                )) as telefone
            FROM telefones tel
            GROUP BY  tel.pessoafis, tel.pessoajur
        ) tel ON cf.id=tel.cliente OR cj.id=tel.clientejur
        WHERE n.xid = :xid
        GROUP BY n.xid, n.descricao, n.data, n.fase, n.prioridade, n.valor, adv.nome
        ", ['xid'=>$id]);
        if($negocio == []) return response()->json(status: 404);
        $negocio = $negocio[0];
        $negocio->contatos = json_decode($negocio->contatos);
        $negocio->contatosjur = json_decode($negocio->contatosjur);

        return response()->json($negocio);
    }

    /**
     * Atualiza um negócio
     * @param Request $request
     * @param String $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, String $id)
    {
        try{
            $validado = $request->validate([
                'descricao' => 'sometimes|nullable|string',
                'data' => 'required|date',
                'responsavel' => 'nullable|string',
                'valor'=>'required|numeric|min:0',
                'contatos'=>'sometimes|nullable|array',
            ]);

            $negocio = Negocio::firstWhere('xid', $id);
            if(is_null($negocio)) return response()->json(['msg'=>'Negócio não encontrado'], status: 404);

            $validado['responsavel'] = Advogado::firstWhere('xid', $validado['responsavel'])?->id;

            DB::transaction(function () use ($validado, $request, $negocio) {
                $negocio->fill($validado);
                $negocio->saveOrFail();

                if($request->has('contatos'))
                {
                    $negocio->clientes()->detach();
                    $negocio->clientesJur()->detach();
                    foreach ($request->input('contatos')??[] as $contato)
                    {
                        if($contato['tipo']=='fisico')
                        {
                            $cliente = ClientePessoaFis::firstWhere('xid', $contato['value']);
                            if(!is_null($cliente))
                                $negocio->clientes()->sync($cliente->id);
                        }
                        else if($contato['tipo']=='juridico')
                        {
                            $cliente = ClientePessoaJur::firstWhere('xid', $contato['value']);
                            if(!is_null($cliente))
                                $negocio->clientesJur()->sync($cliente->id);
                        }
                    }
                }
                DB::commit();
            });

            return response()->json($negocio, 200);
        }
        catch (ValidationException $e)
        {
            DB::rollBack();
            return response()->json(['msg'=>'Dados obrigatórios não fornecidos ou inválidos'], 422);
        }
        catch (QueryException $e)
        {
            DB::rollBack();
            switch ($e->getCode()) {
                case 23514:
                    return response()->json(['msg'=>'A data do negócio não pode ser futura']);
            }
        }
        catch (\Exception $e)
        {
            DB::rollBack();
            return response()->json(['msg'=>'Erro interno'], 500);
        }
    }

    public function delete(String $id)
    {
        $negocio = Negocio::firstWhere('xid', $id);
        if (!is_null($negocio))
            $negocio->delete();

        return response(status:200);
    }

    public function atualizarFase(String $id, FaseNegocio $fase)
    {
        try{
            $negocio = Negocio::firstWhere('xid', $id);
            if (is_null($negocio))
                return response()->json(['msg' => 'Negócio não encontrado'], status: 404);

            $negocio->fase = $fase;
            $negocio->updateOrFail();
            return response(status: 200);
        }catch (\Exception $e)
        {
            return response()->json(['msg' => 'Erro interno'], status: 500);
        }
    }

    public function listar()
    {
        $negocios = DB::select("
        SELECT n.xid, n.descricao, n.data, adv.nome as responsavel, n.fase
        FROM negocios n
        LEFT JOIN advogados adv on adv.id = n.responsavel
        ;
        ");

        return response()->json($negocios);
    }

    public function editar(string $xid)
    {
        $negocio = DB::select("
        WITH temp AS (
            (SELECT cont.negocio, cf.xid, cf.nome
            FROM contatos cont
            LEFT JOIN clientes_pessoa_fis cf ON cf.id = cont.cliente
            GROUP BY cont.negocio, cf.xid, cf.nome
            ) UNION ALL
            (SELECT cont.negocio, cf.xid, cf.razao_social
            FROM contatos_jur cont
            LEFT JOIN clientes_pessoa_jur cf ON cf.id = cont.cliente_jur
            GROUP BY cont.negocio, cf.xid, cf.razao_social
            )
        )
        SELECT
            n.xid, n.descricao, n.data, adv.xid as responsavel, n.valor,
            JSONB_AGG(DISTINCT JSONB_BUILD_OBJECT(
                'xid', tt.xid,
                'nome', tt.nome
            )) as contatos
        FROM negocios n
        LEFT JOIN advogados adv on adv.id = n.responsavel
        LEFT JOIN temp tt ON tt.negocio = n.id
        WHERE n.xid = :xid
        GROUP BY n.xid, n.descricao, n.data, adv.xid, n.valor
        ", ['xid'=>$xid]);

        $negocio = $negocio[0];
        $negocio->contatos = json_decode($negocio->contatos);

        return response()->json($negocio);
    }
}
