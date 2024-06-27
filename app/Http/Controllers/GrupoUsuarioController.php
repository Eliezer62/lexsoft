<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GrupoUsuarioController extends Controller
{
    /**
     * Chama para obter todos os grupos
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(DB::table('grupo_usuarios')->get(), 200);
    }
}
