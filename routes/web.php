<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DocumentoController;

//Todas as rotas web são tratadas pelo react
Route::get('/{path?}', function () {
    return view('app');
})->where('path', '.*');

Route::controller(DocumentoController::class)
    ->prefix('/storage')
    ->group(function (){
        Route::post('/upload', 'store');
    });
