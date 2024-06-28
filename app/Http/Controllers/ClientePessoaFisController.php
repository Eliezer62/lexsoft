<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientePessoaFisController extends Controller
{
    /**
     * Retorna Clientes Pessoa Física
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $adv = DB::table('clientes_pessoa_fis')
                    ->where('deleted_at', '=', null)
                    ->get();

        return response()->json($adv, 200);
    }


    public function store(Request $request)
    {
        $validado = $request->validate([
            'nome' => 'required|max:60|min:3',
            'nome_social' => 'max:60|min:3',
            'cpf'=>'required|max:11|min:11',
            'rg'=>'required',
            'email'=>'required|max:255|email',
            'sexo'=>'required',
            'estado_civil'=>'required',
            'naturalidade'=>'required',
            'naturalidade_uf'=>'required',
            'profissao'=>'required',
            'data_nascimento'=>'required|date',
        ]);
    }
}
