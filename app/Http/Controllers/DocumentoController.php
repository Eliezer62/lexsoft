<?php

namespace App\Http\Controllers;

use App\Models\ClientePessoaFis;
use App\Models\ClientePessoaJur;
use App\Models\Documento;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentoController extends Controller
{
    public function store(Request $request)
    {
        $valido = $request->validate([
            'arquivo'=>'required|max:2048576',
            'descricao'=>'required|string',
            'cliente'=>'required',
            'tipo'=>'required'
        ]);
        if($request->hasFile('arquivo'))
        {
            $arquivo = $request->file('arquivo');
            $nome = $arquivo->hashName();
            $upload = Storage::disk('local')->put('/content/', $arquivo);
            $dados = [
                'descricao'=>$request->input('descricao'),
                'src'=>'/content/'.$nome,
                'data_criado'=>Carbon::parse(Storage::lastModified('/content/'.$nome))->timezone('America/Sao_Paulo'),
                'tipo_arquivo'=>$arquivo->extension(),
                'pessoafis'=>null,
                'pessoajur'=>null
            ];
            if($request->input('tipo')=='fisico')
            {
                $dados['pessoafis'] = ClientePessoaFis::firstWhere('xid', $request->input('cliente'))->id;
            }
            if($request->input('tipo')=='juridico')
            {
                $dados['pessoajur'] = ClientePessoaJur::firstWhere('xid', $request->input('cliente'))->id;
            }
            $doc = Documento::create($dados);
            response(status: 200);
        }
        else return response(status: 500);
    }
}
