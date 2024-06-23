<?php

use Illuminate\Support\Facades\Route;

//Todas as rotas web são tratadas pelo react
Route::get('/{path?}', function () {
    return view('app');
})->where('path', '.*');
