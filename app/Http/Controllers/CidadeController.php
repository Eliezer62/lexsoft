<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CidadeController extends Controller
{
    public function getCidadesByEstado(Estado $estado)
    {
        if(is_null($estado)) return response()->json([], 404);

        return response()->json($estado->cidades, 200);
    }
    public function getCidadeByNome(string $nome)
    {

    }
}
