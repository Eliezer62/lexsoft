<?php

namespace App\Http\Controllers;

use App\Models\ClientePessoaFis;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\RG;
use Illuminate\Validation\ValidationException;

class ClientePessoaFisController extends Controller
{
    /**
     * Retorna Clientes Pessoa Física
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $adv = DB::table('clientes_pessoa_fis')
                    ->select([
                        'xid',
                        'nome','nome_social','cpf',
                        'email','nome_mae','nome_pai',
                        'profissao','data_nascimento',
                        DB::raw('(SELECT nome FROM cidades c WHERE c.id=clientes_pessoa_fis.naturalidade) AS naturalidade'),
                        DB::raw('(SELECT nome FROM estados e WHERE e.uf=clientes_pessoa_fis.naturalidade_uf) AS naturalidade_uf'),
                        DB::raw('(SELECT sexo FROM sexos s WHERE s.id = clientes_pessoa_fis.sexo) AS sexo'),
                        DB::raw('(SELECT estado_civil FROM estados_civis e WHERE clientes_pessoa_fis.estado_civil = e.id) AS estado_civil'),
                        DB::raw("(SELECT json_build_object('numero',numero,'data_emissao', data_emissao, 'emissor', emissor, 'estado', e.nome)
                                FROM rgs, estados e WHERE rgs.id = clientes_pessoa_fis.rg AND rgs.estado=e.uf
                                ) AS rg")
                    ])
                    ->where('deleted_at', '=', null)
                    ->get();

        return response()->json($adv, 200);
    }


    public function store(Request $request)
    {
        try {
            $validado = $request->validate([
                'nome' => 'required|max:60|min:3',
                'nome_social' => 'max:60|min:3',
                'cpf' => 'required|max:11|min:11',
                'email' => 'required|max:255|email',
                'sexo' => 'required',
                'estado_civil' => 'required',
                'naturalidade' => 'required',
                'naturalidade_uf' => 'required',
                'profissao' => 'required',
                'data_nascimento' => 'required|date',
                'nome_pai'=>'sometimes',
                'nome_mae'=>'sometimes',
                'numero' => 'integer|required',
                'data_emissao' => 'required',
                'emissor' => 'required|string|max:10',
                'estado' => 'required|string|max:2|min:2'
            ]);

            $cliente = new ClientePessoaFis();
            $rg = new RG();
            DB::transaction(function () use ($cliente, $rg, $validado){
                $rg->fill($validado);
                if($rg->saveOrFail())
                {
                    $cliente->fill($validado);
                    $cliente->rg = $rg->id;
                    if($cliente->saveOrFail()) DB::commit();
                    else{
                        DB::rollBack();
                        return response()->json(['msg'=>'Erro interno'], 500);
                    }
                }
                else
                {
                    DB::rollBack();
                    return response()->json(['msg'=>'erro interno'], 500);
                }
            });

            return response()->json($cliente, 201);
        }
        catch (ValidationException $e)
        {
            return response()->json(['msg'=>'Dados obrigatórios não fornecidos ou inválidos'], 422);
        }
        catch (QueryException $e)
        {
            if($e->getCode()==23505)
                return response()->json(['msg'=>'Valores duplicados: cpf, email e rg devem ser únicos'], 500);
            return response()->json(['msg'=>'Erro interno'], 500);
        }
        catch (\Exception $e)
        {
            return response()->json(['msg'=>'Erro interno'], 500);
        }
    }


    public function show(string $xid)
    {
        $cliente = DB::table('clientes_pessoa_fis')
            ->select([
                'xid',
                'nome','nome_social','cpf',
                'email','nome_mae','nome_pai',
                'profissao','data_nascimento','naturalidade',
                'naturalidade_uf','sexo','estado_civil',
                DB::raw("(SELECT json_build_object('numero',numero,'data_emissao', data_emissao, 'emissor', emissor, 'estado', estado)
                                FROM rgs WHERE rgs.id = clientes_pessoa_fis.rg
                                ) AS rg")
            ])
            ->where('deleted_at', '=', null)
            ->where('xid', $xid)
            ->first();
        if(is_null($cliente)) return response()->json([], 404);
        $cliente->rg = json_decode($cliente->rg);
        return response()->json($cliente, 200);
    }


    public function update(Request $request, $xid)
    {
        try{
            $cliente = ClientePessoaFis::firstWhere('xid', $xid);
            if (is_null($cliente)) return response()->json([], 404);
            $validado = $request->validate([
                'nome' => 'max:60|string',
                'nome_social' => 'max:60',
                'cpf' => 'max:11|min:11',
                'email' => 'max:255|email',
                'data_nascimento' => 'date',
                'nome_pai' => 'max:60',
                'nome_mae' => 'max:60',
                'profissao' => 'max:60|string',
                'sexo' => 'sometimes',
                'estado_civil' => 'sometimes',
                'naturalidade' => 'sometimes',
                'naturalidade_uf' => 'sometimes',
                'rg' => 'sometimes'
            ]);

            $cliente->rg()->first()->update($validado['rg']);
            $validado['rg'] = $cliente->rg;
            $cliente->update($validado);

            return response()->json($cliente, 200);
        }
        catch (ValidationException $e)
        {
            return response()->json(['msg'=>'Dados obrigatórios não fornecidos ou inválidos'], 422);
        }
        catch (QueryException $e)
        {
            if($e->getCode()==23505)
                return response()->json(['msg'=>'Valores duplicados: somente é permitido um único RG com mesmo número e Estado'], 500);
            return response()->json($e->getMessage(), 500);
        }
        catch (\Exception $e)
        {
            return response()->json(['msg'=>'Erro interno'], 500);
        }
    }


    public function showFormatado($xid)
    {
        $cliente = DB::table('clientes_pessoa_fis')
            ->select([
                'xid',
                'nome','nome_social','cpf',
                'email','nome_mae','nome_pai',
                'profissao','data_nascimento',
                DB::raw('(SELECT nome FROM cidades c WHERE c.id=clientes_pessoa_fis.naturalidade) AS naturalidade'),
                DB::raw('(SELECT nome FROM estados e WHERE e.uf=clientes_pessoa_fis.naturalidade_uf) AS naturalidade_uf'),
                DB::raw('(SELECT sexo FROM sexos s WHERE s.id = clientes_pessoa_fis.sexo) AS sexo'),
                DB::raw('(SELECT estado_civil FROM estados_civis e WHERE clientes_pessoa_fis.estado_civil = e.id) AS estado_civil'),
                DB::raw("(SELECT json_build_object('numero',numero,'data_emissao', data_emissao, 'emissor', emissor, 'estado', e.nome)
                                FROM rgs, estados e WHERE rgs.id = clientes_pessoa_fis.rg AND rgs.estado=e.uf
                                ) AS rg")
            ])
            ->where('deleted_at', '=', null)
            ->where('xid', $xid)
            ->first();
        if(is_null($xid)) return response()->json([], 404);
        $cliente->rg = json_decode($cliente->rg);
        return response()->json($cliente, 200);
    }


    public function delete($xid)
    {
        $cliente = ClientePessoaFis::firstWhere('xid', $xid);
        if(!is_null($cliente)) $cliente->delete();
        return response(status: 200);
    }
}
