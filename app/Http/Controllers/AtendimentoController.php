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
        $atendimento = DB::select("SELECT assunto,
        COALESCE((SELECT nome FROM clientes_pessoa_fis cf WHERE cf.id=ate.clientefis),
        (SELECT razao_social FROM clientes_pessoa_jur cj WHERE cj.id=ate.clientejur)) AS cliente,
        TO_CHAR(data, 'DD/MM/YYYY HH24:MI') AS data, COALESCE((SELECT cpf FROM clientes_pessoa_fis cf WHERE cf.id=ate.clientefis),
        (SELECT cnpj FROM clientes_pessoa_jur cj WHERE cj.id=ate.clientejur)) AS documento
        FROM atendimentos ate ORDER BY data DESC;");

        return response()->json($atendimento, 200);
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
