<?php

namespace App\Http\Controllers;

use App\Models\ClasseJudicial;
use Illuminate\Http\Request;

class ClasseJudicialController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $classes = ClasseJudicial::all();
        return response()->json($classes, 200);
    }
}
