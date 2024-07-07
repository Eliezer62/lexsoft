<?php

namespace App\Http\Controllers;

use App\Models\ClientePessoaFis;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use App\Models\ClientePessoaJur;

class ClientePessoaJurController extends Controller
{
    public function index()
    {
        $clientes = DB::table('clientes_pessoa_jur')
                    ->get();

        return response()->json($clientes, 200);
    }

    /**
     * Cria um novo cliente jur
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        try{
            $validados = $request->validate([
                'cnpj'=>'required|max:14|min:14',
                'razao_social'=>'required|max:255',
                'nome_fantasia'=>'max:255',
                'email'=>'email',
                'administrador'=>'required'
            ]);
            $adm = ClientePessoaFis::firstWhere('xid', $validados['administrador']);
            if(is_null($adm)) throw new \Exception();
            $validados['administrador'] = $adm->id;
            $cliente = ClientePessoaJur::create($validados);
            return response()->json($cliente, 201);
        }
        catch (ValidationException $e)
        {
            return response()->json(['msg'=>'Dados obrigatórios não fornecidos ou inválidos'], 422);
        }
        catch (QueryException $e)
        {
            if($e->getCode()==23505)
                return response()->json(['msg'=>'Valores duplicados: cnpj ou razão social devem ser únicos'], 500);
            return response()->json(['msg'=>'Erro interno'], 500);
        }
        catch (\Exception $e)
        {
            return response()->json(['msg'=>'Erro interno'], 500);
        }
    }


    public function show(string $xid)
    {
        $cliente = ClientePessoaJur::select([
            'xid',
            'cnpj',
            'email',
            'razao_social',
            'nome_fantasia',
            'administrador'
        ])
            ->with('administrador')
            ->first();

        return $cliente;
    }


    public function update(Request $request, string $xid)
    {
        try{
            $validados = $request->validate([
                'cnpj'=>'max:14|min:14',
                'razao_social'=>'max:255',
                'nome_fantasia'=>'max:255',
                'email'=>'email',
                'administrador'=>'sometimes'
            ]);
            $adm = ClientePessoaFis::firstWhere('xid', $validados['administrador']);
            $cliente = ClientePessoaJur::firstWhere('xid', $xid);
            if(is_null($adm) or is_null($cliente)) return response()->json([], 404);
            $validados['administrador'] = $adm->id;
            $cliente->update($validados);
            return response()->json($cliente, 200);
        }
        catch (ValidationException $e)
        {
            return response()->json(['msg'=>'Dados obrigatórios não fornecidos ou inválidos'], 422);
        }
        catch (QueryException $e)
        {
            if($e->getCode()==23505)
                return response()->json(['msg'=>'Valores duplicados: cnpj ou razão social devem ser únicos'], 500);
            return response()->json($e->getMessage(), 500);
        }
        catch (\Exception $e)
        {
            return response()->json(['msg'=>'Erro interno'], 500);
        }
    }

    public function  delete($xid)
    {
        $cliente = ClientePessoaJur::firstWhere('xid', $xid);
        if(!is_null($cliente)) $cliente->delete();
        return response(status: 200);
    }
}
