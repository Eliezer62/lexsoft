<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = DB::select("
        (SELECT cf.xid, cf.nome, cf.cpf as documento, cf.email, ('fisico') AS tipo FROM clientes_pessoa_fis cf WHERE cf.deleted_at IS null)
        UNION ALL
        (SELECT cj.xid, cj.razao_social, cj.cnpj, cj.email, ('juridico') FROM clientes_pessoa_jur cj WHERE cj.deleted_at IS null);
        ");

        return response()->json($clientes, 200);
    }
}
