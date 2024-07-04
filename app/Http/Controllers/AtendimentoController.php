<?php

namespace App\Http\Controllers;

use App\Models\Atendimento;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;

class AtendimentoController extends Controller
{
    public function index()
    {
        $atendimento = DB::select("SELECT xid, assunto,
        COALESCE((SELECT nome FROM clientes_pessoa_fis cf WHERE cf.id=ate.clientefis),
        (SELECT razao_social FROM clientes_pessoa_jur cj WHERE cj.id=ate.clientejur)) AS cliente,
        TO_CHAR(data, 'DD/MM/YYYY HH24:MI') AS data, COALESCE((SELECT cpf FROM clientes_pessoa_fis cf WHERE cf.id=ate.clientefis),
        (SELECT cnpj FROM clientes_pessoa_jur cj WHERE cj.id=ate.clientejur)) AS documento,
        (CASE WHEN ate.clientefis IS NOT NULL THEN 'fisico' WHEN ate.clientejur IS NOT NULL THEN 'juridico' END) AS tipo
        FROM atendimentos ate WHERE deleted_at IS NULL
        ORDER BY data DESC;");

        return response()->json($atendimento, 200);
    }

    public function show($xid)
    {
        $atendimento = DB::select('SELECT xid, data, assunto, descricao,
        COALESCE((SELECT nome FROM clientes_pessoa_fis cf WHERE att.clientefis = cf.id),
        (SELECT razao_social FROM clientes_pessoa_jur cj WHERE att.clientejur = cj.id)) AS cliente,
        (SELECT numero FROM processos WHERE att.processo = id) AS processo
        FROM atendimentos att WHERE att.xid = :xid;
        ', ['xid'=>$xid]);
        if($atendimento == []) return response()->json([], 404);
        return response()->json($atendimento[0], 200);
    }

    /**
     * Salva um novo Atendimento
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        try {
            $validado = $request->validate([
                'clientefis'=>'sometimes',
                'clientejur'=>'sometimes',
                'data'=>'required|date',
                'assunto'=>'required|string',
                'processo'=>'sometimes',
                'descricao'=>'sometimes',
            ]);

            $atendimento = Atendimento::create($validado);

            return response()->json($atendimento, 201);

        }
        catch (ValidationException $e)
        {
            return response()->json(['msg'=>'Dados obrigatórios não fornecidos ou inválidos'], 422);
        }
        catch (QueryException $e)
        {
            if($e->getCode()==23505)
                return response()->json(['msg'=>'Valores duplicados: cpf, oab e email devem ser únicos'], 500);
            else
                return response()->json(['msg'=>'Erro interno'], 500);
        }
        catch (\Exception $e)
        {
            return response()->json(['msg'=>'Erro interno'], 500);
        }

    }
}
