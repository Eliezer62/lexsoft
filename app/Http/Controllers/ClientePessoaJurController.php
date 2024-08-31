<?php

namespace App\Http\Controllers;

use App\Models\ClientePessoaFis;
use App\Models\Endereco;
use App\Models\Telefone;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
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
                'administrador'=>'sometimes',
                'enderecos'=>'sometimes'
            ]);
            if($request->has('administrador')){
                $adm = ClientePessoaFis::firstWhere('xid', $validados['administrador']);
                if(is_null($adm)) throw new \Exception();
                $validados['administrador'] = $adm->id;
            }

            $cliente = ClientePessoaJur::create($validados);
            if($request->has('enderecos'))
                foreach ($validados['enderecos'] as $endereco)
                {
                    Endereco::create([
                        'logradouro'=>$endereco['logradouro'],
                        'numero'=>$endereco['numero'],
                        'cidade'=>$endereco['cidade'],
                        'estado'=>$endereco['uf'],
                        'cep'=>$endereco['cep'],
                        'bairro'=>$endereco['bairro'],
                        'complemento'=>$endereco['complemento'] ?? null,
                        'pessoajur' => $cliente->id
                    ]);
                };

            if($request->has('telefones'))
            {
                foreach ($request->input('telefones') as $telefone)
                {
                    Telefone::create([
                        'ddi'=>($telefone['ddi'] ?? '+55'),
                        'ddd'=>$telefone['ddd'],
                        'numero'=>$telefone['numero'],
                        'pessoajur'=>$cliente->id
                    ]);
                }
            }

            return response()->json($cliente, 201);
        }
        catch (ValidationException $e)
        {
            return response()->json(['msg'=>'Dados obrigatórios não fornecidos ou inválidos'], 422);
        }
        catch (QueryException $e)
        {
            if($e->getCode()=='P0002')
                return response()->json(['msg'=>'Razão social já cadastrado anteriormente'], 409);

            elseif($e->getCode()=='P0003')
                return response()->json(['msg'=>'CNPJ já cadastrado anteriormente'], 409);

            elseif($e->getCode()=='P7777')
                return response()->json(['msg'=>'E-MAIL já inválido'], 422);

            elseif($e->getCode()==23505)
                return response()->json(['msg'=>'Valores duplicados: cnpj ou razão social devem ser únicos'], 500);

            return response()->json(['msg'=>'Erro interno'], 500);
        }
        catch (\Exception $e)
        {
            return response()->json(['msg'=>'Erro interno'.$e->getMessage()], 500);
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
            'administrador',
            DB::raw("
                    (SELECT JSON_AGG(JSON_BUILD_OBJECT(
                        'xid', e.xid,
                        'cep',e.cep,
                        'logradouro', e.logradouro,
                        'numero',e.numero,
                        'bairro', e.bairro,
                        'complemento', e.complemento,
                        'cidade', city.nome,
                        'estado', est.nome
                    ))
                    FROM enderecos e
                    JOIN cidades city ON e.cidade = city.id
                    JOIN estados est ON e.estado = est.uf
                    WHERE e.pessoajur = clientes_pessoa_jur.id
                    ) as enderecos
                "),
            DB::raw("
                (SELECT JSON_AGG(JSON_BUILD_OBJECT(
                    'xid',tel.xid,
                    'ddi',tel.ddi,
                    'ddd',tel.ddd,
                    'numero',tel.numero
                         )
                    ) FROM telefones tel
                    WHERE clientes_pessoa_jur.id = tel.pessoajur
                ) as telefones
                ")
        ])
            ->with('administrador')
            ->firstWhere('xid', $xid);

        $cliente->enderecos = json_decode($cliente->enderecos);
        $cliente->telefones = json_decode($cliente->telefones);

        $advogado = Auth::user();
        Log::channel('auditoria')->info("O advogado {$advogado->xid} nome {$advogado->nome} visualizou os dados do cliente {$cliente->xid} razão social {$cliente->razao_social} cnpj {$cliente->cnpj}");

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
                'administrador'=>'sometimes',
                'novos_enderecos'=>'sometimes'
            ]);
            $cliente = ClientePessoaJur::firstWhere('xid', $xid);
            if($request->has('administrador')){
                $adm = ClientePessoaFis::firstWhere('xid', $validados['administrador']);
                if(is_null($adm) or is_null($cliente)) return response()->json([], 404);
                $validados['administrador'] = $adm->id;
            }

            $cliente->update($validados);

            if($request->has('novos_enderecos'))
            {
                foreach ($validados['novos_enderecos'] as $endereco)
                {
                    Endereco::create([
                        'cep'=>$endereco['cep'],
                        'logradouro'=>$endereco['logradouro'],
                        'numero'=>$endereco['numero'],
                        'bairro'=>$endereco['bairro'],
                        'estado'=>$endereco['uf'],
                        'cidade'=>$endereco['cidade'],
                        'complemento'=>$endereco['complemento']??null,
                        'pessoajur'=>$cliente->id
                    ]);
                }
            }

            if($request->has('novos_telefones'))
            {
                foreach ($request->input('novos_telefones') as $telefone)
                {
                    Telefone::create([
                        'ddi'=>($telefone['ddi'] ?? '+55'),
                        'ddd'=>$telefone['ddd'],
                        'numero'=>$telefone['numero'],
                        'pessoajur'=>$cliente->id
                    ]);
                }
            }

            return response()->json($cliente, 200);
        }
        catch (ValidationException $e)
        {
            return response()->json(['msg'=>'Dados obrigatórios não fornecidos ou inválidos'], 422);
        }
        catch (QueryException $e)
        {
            if($e->getCode()=='P0002')
                return response()->json(['msg'=>'Razão social já cadastrado anteriormente'], 409);

            elseif($e->getCode()=='P0003')
                return response()->json(['msg'=>'CNPJ já cadastrado anteriormente'], 409);

            elseif($e->getCode()=='P7777')
                return response()->json(['msg'=>'E-MAIL já inválido'], 422);

            elseif($e->getCode()==23505)
                return response()->json(['msg'=>'Valores duplicados: cnpj ou razão social devem ser únicos'], 500);

            return response()->json(['msg'=>'Erro interno'], 500);
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
