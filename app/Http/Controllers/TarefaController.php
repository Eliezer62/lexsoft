<?php

namespace App\Http\Controllers;

use App\Models\Advogado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TarefaController extends Controller
{
    public function index($xid)
    {
        $adv = Advogado::firstWhere('xid', $xid);

        return response()->json(
            DB::table('tarefas')->select(['xid', 'descricao', 'status'])->where('responsavel',3)->get()
            , 200);
    }
}
