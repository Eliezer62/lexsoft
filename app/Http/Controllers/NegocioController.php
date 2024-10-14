<?php

namespace App\Http\Controllers;

use App\Models\Advogado;
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
            ]);

            $validado['responsavel'] = Advogado::firstWhere('xid', $validado['responsavel'])?->id;

            $negocio = Negocio::create($validado);
            return response()->json($negocio, 201);
        }
        catch (ValidationException $e)
        {
            return response()->json(['msg'=>'Dados obrigatórios não fornecidos ou inválidos'], 422);
        }
        catch (QueryException $e)
        {
            switch ($e->getCode()) {
                case 23514:
                    return response()->json(['msg'=>'A data do negócio não pode ser futura']);
            }
        }
        catch (\Exception $e)
        {
            return response()->json(['msg'=>'Erro interno'], 500);
        }
    }

    /**
     * Retorna todos os negocios via serializacao
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $negocios = DB::table('negocios')
            ->select(['negocios.xid', 'descricao', 'data', 'responsavel', 'advogados.xid as responsavel'])
            ->leftJoin('advogados', 'negocios.responsavel','advogados.id')
            ->whereRaw('negocios.deleted_at IS NULL')
            ->get();

        return response()->json($negocios);
    }

    /**
     * Retorna apenas um negocio na serializacao
     * @param String $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(String $id)
    {
        $negocio = DB::table('negocios')
            ->select(['negocios.xid', 'descricao', 'data', 'responsavel', 'advogados.xid as responsavel'])
            ->leftJoin('advogados', 'negocios.responsavel','advogados.id')
            ->where('negocios.xid', $id)
            ->whereRaw('negocios.deleted_at IS NULL')
            ->first();

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
        try {
            $validado = $request->validate([
                'descricao' => 'sometimes|nullable|string',
                'data' => 'required|date',
                'responsavel' => 'nullable|string',
            ]);

            $negocio = Negocio::firstWhere('xid', $id);

            $validado['responsavel'] = Advogado::firstWhere('xid', $validado['responsavel'])?->id;
            $negocio->updateOrFail($validado);

            return response()->json($negocio, 200);

        }
        catch (ValidationException $e)
        {
            return response()->json(['msg'=>'Dados obrigatórios não fornecidos ou inválidos'], 422);
        }
    }

    public function delete(String $id)
    {
        $negocio = Negocio::firstWhere('xid', $id);
        if (!is_null($negocio))
            $negocio->delete();

        return response($status=200);
    }
}
