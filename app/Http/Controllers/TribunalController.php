<?php

namespace App\Http\Controllers;

use App\Models\Tribunal;
use Illuminate\Http\Request;

class TribunalController extends Controller
{
    /**
     * Retorna todos os tribunais
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $tribunais = Tribunal::all();
        return response()->json($tribunais, 200);
    }
}
