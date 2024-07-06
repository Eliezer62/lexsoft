<?php

namespace App\Http\Controllers;

use App\Models\ClientePessoaFis;
use App\Models\ClientePessoaJur;
use App\Models\Documento;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Mockery\Exception;

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
                'data_criacao'=>Carbon::parse(Storage::lastModified('/content/'.$nome))->timezone('America/Sao_Paulo'),
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


    public function search(Request $request)
    {
        try {

            $validado = $request->validate(['query' => 'required|string']);
            $q = htmlspecialchars($validado['query'], ENT_QUOTES);
            $documento = DB::table('view_documentos')
                ->whereRaw('to_tsvector(cliente) @@ to_tsquery(:q) OR
                            to_tsvector(descricao) @@ to_tsquery(:q) OR
                             to_tsvector(documento) @@ to_tsquery(:q)')
                ->setBindings(['q' => $q])->get();

            return $documento;
        }
        catch (QueryException $e)
        {
            if($e->getCode()==42601)
            {
                return response()->json(['msg'=>'Caracteres não permitido na query'], 500);
            }
            else return response(status: 500);
        }
        catch (Exception $e)
        {
            return response(status: 500);
        }
    }
}
