<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Rotas Estado
Route::controller(EstadoController::class)
    ->prefix('/estados')
    ->group(function (){
        Route::get('/', 'index')
            ->name('estados.index');


    });


//Rotas Grupo Usuario
Route::controller(GrupoUsuarioController::class)
    ->prefix('/grupo-usuarios')
    ->group(function (){
        Route::get('/', 'index')
        ->name('grupo-usuarios.index');
    });


//Rotas para Advogado
Route::controller(AdvogadoController::class)
    ->prefix('/advogados')
    ->group(function (){
        Route::get('/', 'index')
            ->name('advogados.index');

        Route::get('/{xid}', 'show')
            ->name('advogados.show');

        Route::post('/', 'store')
            ->name('advogados.store');

        Route::put('/{xid}', 'update')
            ->name('advogados.update');

        Route::delete('/{xid}', 'delete')
            ->name('advogados.delete');
    });
