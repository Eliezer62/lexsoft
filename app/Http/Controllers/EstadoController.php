<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class EstadoController extends Controller
{
    /**
     * Obter todos os estados
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(DB::table('estados')->orderBy('nome', 'ASC')->get(), 200);
    }
}
