<?php

namespace App\Http\Controllers;

use App\Models\Atendimento;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AtendimentoController extends Controller
{


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
