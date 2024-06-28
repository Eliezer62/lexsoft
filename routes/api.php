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

        Route::post('/{xid}/update/password', 'updatePassword')
            ->name('advogados.update.password');
    });

//Cliente Pessoa Física
Route::controller(ClientePessoaFisController::class)
    ->prefix('/clientesfis')
    ->group(function(){
        Route::get('/', 'index')
                ->name('clientesfis.index');

        Route::get('/{xid}', 'show')
                ->name('clientesfis.show');

        Route::post('/', 'store')
                ->name('clientesfis.store');

        Route::post('/rg', 'storeRG')
                ->name('clientesfis.storeRG');
    });


//Controller cidades
Route::controller(CidadeController::class)
    ->prefix('/cidades')
    ->group(function (){
        Route::get('/{estado}/', 'getCidadesByEstado')
            ->name('cidades.getByEstado');
    });
