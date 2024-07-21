<?php

namespace App\Http\Controllers;
use App\Models\Documento;
use App\Models\Qualificacao;
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

//Cliente
Route::controller(ClienteController::class)
    ->prefix('/clientes')
    ->group(function (){
       Route::get('/', 'index')
            ->name('clientes.index');
    });

//Cliente Pessoa Física
Route::controller(ClientePessoaFisController::class)
    ->prefix('/clientesfis')
    ->group(function(){
        Route::get('/', 'index')
                ->name('clientesfis.index');

        Route::get('/{xid}', 'show')
                ->name('clientesfis.show');

        Route::get('/{xid}/formatado', 'showFormatado')
            ->name('clientesfis.show.formatado');

        Route::post('/', 'store')
                ->name('clientesfis.store');

        Route::put('/{xid}', 'update')
                ->name('clientesfis.update');

        Route::delete('/{xid}', 'delete')
                ->name('clientesfis.delete');
    });

//Cliente Pessoa Jur
Route::controller(ClientePessoaJurController::class)
    ->prefix('/clientesjur')
    ->group(function(){
       Route::get('/', 'index')
            ->name('clientesjur.index');

       Route::get('/{xid}', 'show')
            ->name('clientesjur.show');

       Route::post('/', 'store')
           ->name('clientesjur.store');

       Route::put('/{xid}', 'update')
            ->name('clientesjur.update');

       Route::delete('/{xid}', 'delete')
            ->name('clientesjur.delete');
    });


//Controller cidades
Route::controller(CidadeController::class)
    ->prefix('/cidades')
    ->group(function (){
        Route::get('/{estado}/', 'getCidadesByEstado')
            ->name('cidades.getByEstado');
    });


//Controller Sexos
Route::get('/sexos', [SexoController::class, 'index']);

//Controller Estado Civil
Route::get('/estados-civis', [EstadoCivilController::class, 'index']);

//Tarefas Controller
Route::controller(TarefaController::class)
    ->prefix('/tarefas')
    ->group(function (){
       Route::get('/{xid}', 'index')
            ->name('tarefas.index');

       Route::post('/', 'store')
           ->name('tarefas.store');

       Route::put('/{xid}', 'update')
           ->name('tarefas.update');

       Route::delete('/{xid}', 'delete')
           ->name('tarefas.delete');

       Route::post('/{xid}/status', 'status')
           ->name('tarefas.status');
    });

//Atendimento Controller
Route::controller(AtendimentoController::class)
    ->prefix('/atendimentos')
    ->group(function (){
        Route::get('/', 'index')
            ->name('atendimentos.index');

        Route::get('/{xid}', 'show')
            ->name('atendimentos.show');

        Route::post('/', 'store')
            ->name('atendimentos.store');

        Route::put('/{xid}', 'update')
            ->name('atendimentos.update');

        Route::delete('/{xid}', 'delete')
            ->name('atendimentos.delete');
    });

Route::get('/documentos/pesquisa', [DocumentoController::class, 'search']);

Route::get('/storage/content/{xid}', [DocumentoController::class, 'show']);

Route::delete('/storage/content/{xid}', [DocumentoController::class, 'delete']);

//Rotas Processo
Route::get('/classes_judiciais', [ClasseJudicialController::class, 'index'])
    ->name('classe_judicial.index');

Route::get('/tribunais', [TribunalController::class, 'index'])
    ->name('tribunal.index');

Route::get('/qualificacoes', [QualificacaoController::class, 'index'])
    ->name('qualificacao.index');

Route::controller(ProcessoController::class)
    ->prefix('/processos')
    ->group(function (){
        Route::get('/', 'index')
            ->name('processos.index');

        Route::get('/{xid}', 'show')
            ->name('processos.show');

        Route::post('/', 'store')
            ->name('processos.store');

        Route::post('/{xid}/partes', 'vincular')
            ->name('processos.partes');

        Route::put('/{xid}', 'update')
            ->name('processos.update');

        Route::delete('/{xid}', 'delete')
            ->name('processos.delete');

        Route::get('/{xid}/partes', 'getPartes')
            ->name('processos.getPartes');

        Route::get('/{xid}/advogados', 'getAdvogados')
            ->name('processos.getAdvogados');

        Route::put('/{xid}/partes', 'updatePartesEAdvs')
            ->name('processos.updatePartes');

        Route::get('/{xid}/visualizar', 'visualizarProcesso')
            ->name('processos.visualizarProcesso');

        Route::post('/{xid}/eventos', 'lancarEvento')
            ->name('processos.lancarEvento');

        Route::get('/{xid}/eventos', 'getEventos')
            ->name('processos.getEventos');

        Route::delete('/{processo}/eventos/{xid}', 'removerEvento')
            ->name('processos.removerEvento');
    });
