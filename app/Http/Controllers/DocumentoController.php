<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentoController extends Controller
{
    public function store(Request $request)
    {
        $valido = $request->validate(['arquivo'=>'required|max:2048576']);
        if($request->hasFile('arquivo'))
        {
            $arquivo = $request->file('arquivo');
            $nome = $arquivo->hashName();
            $upload = Storage::disk('local')->put('/content/', $arquivo);
            return Storage::disk('local')->get('/content/'.$nome);
        }
        else return response(status: 500);
    }
}
