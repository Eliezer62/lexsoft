<?php

namespace App\Http\Controllers;

use App\Models\ClientePessoaFis;
use App\Models\ClientePessoaJur;
use App\Models\Documento;
use App\Models\Evento;
use App\Models\Processo;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Mockery\Exception;
use Barryvdh\DomPDF\Facade\Pdf;
use PhpParser\Comment\Doc;

class DocumentoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
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
                ->whereRaw('to_tsvector(cliente) || to_tsvector(descricao) ||
                             to_tsvector(documento) @@ phraseto_tsquery(:q)')->limit(10)
                ->setBindings(['q' => $q])->get();

            return $documento;
        }
        catch (QueryException $e)
        {
            if($e->getCode()==42601)
            {
                return response()->json(['msg'=>'Caracteres não permitido na query'], 500);
            }
            else return response(['msg'=>'Erro interno'], status: 500);
        }
        catch (Exception $e)
        {
            return response()->json(['msg'=>'Erro interno'], 500);
        }
    }


    public function show($xid)
    {
        $documento = Documento::firstWhere('xid', $xid);
        if(is_null($documento)) return response(status:404);

        if($documento->tipo_arquivo == 'lex  ')
        {
            $arquivo = Storage::disk('local')->get($documento->src);
            $arquivo = '<html>
                            <style>
                            *{
                                padding: 0;
                                margin: 0;
                            }
                            body{
                                margin-left: 3cm;
                                margin-top: 3cm;
                                margin-bottom: 2cm;
                                margin-right: 2cm;
                            }
                            pre{
                                font-family: Sans-Serif;
                            }
                            table {
                                margin: auto;
                            }
                            table td, table th {
                                border:0.5px solid #333333;
                                padding: 0;
                                margin:0;
                                min-width: 5px;
                            }

                            </style>
                        <body><pre>'
                        .$arquivo.'</pre>
                        </body></html>';
            return Pdf::loadHTML($arquivo)
                ->setPaper('a4', 'portrait')
                ->stream($documento->descricao.'.pdf');
        }

        return Storage::disk('local')->response($documento->src);
    }

    public function delete($xid)
    {
        $documento = Documento::firstWhere('xid', $xid);
        if(!is_null($documento)) $documento->delete();

        return response(status: 200);
    }

    /**
     * Salva um documento do editor
     * @param Request $request
     * @param string $processo
     * @param string $evento
     * @return \Illuminate\Http\JsonResponse
     */
    public function salvar(Request $request, string $processo, string $evento)
    {
        $valido = $request->validate(['arquivo'=>'required|file|max:2048576', 'nome'=>'sometimes|string|max:255']);

        $processo = Processo::firstWhere('xid', $processo);

        $evento = Evento::firstWhere('xid', $evento);

        $arquivo = $request->file('arquivo');

        if($request->has('xid'))
        {
            $documento = Documento::firstWhere('xid', $request->input('xid'));

            Storage::disk('local')->delete($documento->src);

            $documento->update(['src'=>'/processos/'.$processo->xid.'/eventos/'.$evento->xid.'/content/'.$arquivo->hashName()]);
            Storage::disk('local')->put('/processos/'.$processo->xid.'/eventos/'.$evento->xid.'/content/', $request->file('arquivo'));

            $documento = Documento::find($documento->id);
            return response()->json($documento, 200);
        }
        else{
            $documento = new Documento();
            $documento->fill([
                'tipo_arquivo'=>'lex',
                'descricao'=>$request->input('nome').'.lex',
                'src'=>'/processos/'.$processo->xid.'/eventos/'.$evento->xid.'/content/'.$arquivo->hashName(),
                'data_criacao'=>Carbon::now()->format('Y-m-d H:i:s')
            ]);
            $documento->save();
            Storage::disk('local')->putFile('/processos/'.$processo->xid.'/eventos/'.$evento->xid.'/content/', $arquivo);
            $documento->evento()->attach($evento);

            $documento = Documento::find($documento->id);
            return response()->json($documento, 200);
        }
    }


    public function uploadVincular(Request $request, $processo, $evento)
    {
        $request->validate([
            'arquivo'=>'required|file|max:2048576'
        ]);

        $processo = Processo::firstWhere('xid', $processo);
        $evento = Evento::firstWhere('xid', $evento);

        if($request->hasFile('arquivo'))
        {
            $arquivo = $request->file('arquivo');

            $documento = Documento::create([
                'tipo_arquivo'=>$arquivo->extension(),
                'descricao'=>$arquivo->getClientOriginalName(),
                'src'=>'/processos/'.$processo->xid.'/eventos/'.$evento->xid.'/content/'.$arquivo->hashName(),
                'data_criacao'=>Carbon::now()->format('Y-m-d H:i:s')
            ]);

            Storage::disk('local')->putFile('/processos/'.$processo->xid.'/eventos/'.$evento->xid.'/content/', $arquivo);
            $documento->evento()->attach($evento);

            return response(status: 200);
        }
        else return response(status: 500);
    }

    /**
     * Obtem os documentos vinculados a um evento de um processo
     * @param $processo
     * @param $evento
     * @return \Illuminate\Http\JsonResponse
     */
    public function documentosVinculados($processo, $evento)
    {
        $evento = Evento::firstWhere('xid', $evento);

        $documentos = DB::select('
        SELECT xid,tipo_arquivo, descricao, data_criacao,
               (CASE WHEN tipo_arquivo=\'lex\' THEN true ELSE false END) as editavel,
               COALESCE(docs.pessoafis, docs.pessoajur) as cliente
        FROM documentos docs, vinculados vincs WHERE docs.id = vincs.documento AND vincs.evento = :evento AND docs.deleted_at IS NULL;
        ', ['evento'=>$evento->id]);

        return response()->json($documentos, 200);
    }

    /**
     * Vincula um documento de pessoa em um evento
     * @param $processo
     * @param $evento
     * @param $documento
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Foundation\Application|\Illuminate\Http\Response
     */
    public function vincularDocsPessoa($processo, $evento, $documento)
    {
        try{
            $evento = Evento::firstWhere('xid', $evento);

            $documento = Documento::firstWhere('xid', $documento);
            $documento->evento()->attach($evento);
            return response(status: 200);
        }
        catch (QueryException $e)
        {
            if($e->getCode()==23505)
                return response(status: 501);
            return response(status: 500);
        }
        catch (\Exception $e){
            response(status: 500);
        }
    }


    public function desvincularDocsPessoa($processo, $evento, $documento)
    {
        $evento = Evento::firstWhere('xid', $evento);

        $documento = Documento::firstWhere('xid', $documento);

        $documento->evento()->detach($evento);
        return response(status: 200);
    }


    public function getContentDocumentoLex($processo, $evento, $documento)
    {
        $documento = Documento::firstWhere('xid', $documento);

        if(is_null($documento)) return response(status: 404);

        else return Storage::disk('local')->response($documento->src);
    }
}
