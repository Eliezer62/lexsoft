<?php

namespace App\Http\Controllers;

use App\Models\Sexo;
use Illuminate\Http\Request;

class SexoController extends Controller
{
    public function index()
    {
        return Sexo::all();
    }
}
