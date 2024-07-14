<?php

namespace App\Http\Controllers;

use App\Models\Qualificacao;
use Illuminate\Http\Request;

class QualificacaoController extends Controller
{
    /**
     * Retorna todas as qualificações
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $qualificacoes = Qualificacao::all();

        return response()->json($qualificacoes, 200);
    }
}
