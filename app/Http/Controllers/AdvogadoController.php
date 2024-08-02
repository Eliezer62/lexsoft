<?php

namespace App\Http\Controllers;


use http\Env\Response;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Advogado;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AdvogadoController extends Controller
{
    /**
     * Return all Advogados
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(DB::table('advogados')->select([
            'xid',
            'cpf',
            'nome',
            'email',
            'oab',
            'uf_oab',
            'grupo',
        ])->where('deleted_at', null)->get(), 200);
    }

    /**
     * Get a xid advogado, return 404 response if is a null advogado
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($xid)
    {
        $advogado = DB::table('advogados')->select([
            'xid',
            'cpf',
            'nome',
            'email',
            'oab',
            'uf_oab',
            'grupo',
        ])->where('xid', $xid)
            ->where('deleted_at', null)->get()->first();

        if(is_null($advogado)) return response()->json([],404);
        return response()->json($advogado, 200);
    }

    public function store(Request $request)
    {
        try{
            $validado = $request->validate([
                'cpf'=>'min:11|max:11|string|required',
                'nome'=>'max:60|string|required',
                'oab'=>'max:6|string',
                'uf_oab'=>'max:2',
                'email'=>'email|required',
                'grupo'=>'required'
            ]);
            $validado['password'] = Hash::make('lexsoft');
            $adv = Advogado::create($validado);
            return response()->json($adv, 201);
        }
        catch (ValidationException $e)
        {
            return response()->json(['msg'=>'Dados obrigatórios não fornecidos ou inválidos'], 422);
        }
        catch (QueryException $e)
        {
            if($e->getCode()==23505)
                return response()->json(['msg'=>'Valores duplicados: cpf, oab e email devem ser únicos'], 500);

            if($e->getCode()=='P0001')
                return response()->json(['msg'=>'CPF inválido'], 422);

            else return response()->json(['msg'=>'Erro interno'], 500);
        }
        catch (\Exception $e)
        {
            return response()->json(['msg'=>'Erro interno'], 500);
        }
    }

    /**
     * Atualiza o advogado
     * @param Request $request
     * @param $xid
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $xid)
    {
        try {
            $adv = Advogado::firstWhere('xid', $xid);
            if (is_null($adv)) return response()->json([],404);
            $validado = $request->validate([
                'nome'=>'max:60|string',
                'oab'=>'sometimes|max:6|string',
                'uf_oab'=>'sometimes|max:2',
                'grupo'=>'sometimes'
            ]);

            $adv->update($validado);

            return response()->json($adv, 200);
        }
        catch (ValidationException $e)
        {
            return response()->json(['msg'=>'Dados obrigatórios não fornecidos ou inválidos'], 422);
        }
        catch (QueryException $e)
        {
            if($e->getCode()==23505)
                return response()->json(['msg'=>'Valores duplicados: cpf, oab e email devem ser únicos'], 500);
        }
        catch (\Exception $e)
        {
            return response()->json(['msg'=>'Erro interno'], 500);
        }
    }


    public function delete($xid)
    {
        $adv = Advogado::firstWhere('xid', $xid);
        if(is_null($adv)) return \response()->json([], 404);
        $adv->delete();
        return \response()->json([], 200);
    }

    /**
     * Atualiza a senha do advogado
     * @param Request $request
     * @param $xid
     * @return \Illuminate\Http\JsonResponse|void
     */
    public function updatePassword(Request $request, $xid)
    {
        try {
            $adv = Advogado::firstWhere('xid', $xid);
            if (is_null($adv)) return response()->json([], 404);
            $validado = $request->validate(['password' => 'required|min:8']);
            $adv->update($validado);
        }
        catch (ValidationException $e)
        {
            return response()->json(['msg'=>'Dados obrigatórios não fornecidos ou inválidos'], 422);
        }
        catch (\Exception $e)
        {
            return response()->json(['msg'=>'Erro interno'], 500);
        }
    }
}
