<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tarefas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->char('xid', 20)
                ->default('xid()')
                ->unique('uc_tarefas_xid');
            $table->text('descricao');
            $table->integer('responsavel');
            $table->enum('status', ['nova', 'em progresso', 'confirmar', 'resolvido', 'sem solução']);

            //constraint
            $table->foreign('responsavel', 'fk_tarefa_adv_resp')
                ->references('id')
                ->on('advogados');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarefas');
    }
};
