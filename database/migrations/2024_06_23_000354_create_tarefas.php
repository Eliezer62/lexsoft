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
            $table->string('assunto');
            $table->text('descricao')->nullable();
            $table->integer('responsavel');
            $table->enum('status', ['nova', 'em progresso', 'confirmar', 'resolvido', 'sem solução']);

            //constraint
            $table->foreign('responsavel', 'fk_tarefa_adv_resp')
                ->references('id')
                ->on('advogados');
        });
        DB::statement('ALTER TABLE tarefas ADD COLUMN xid public.xid DEFAULT xid()');
        DB::statement('ALTER TABLE tarefas ADD CONSTRAINT uc_tarefas_xid UNIQUE (xid)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarefas');
    }
};
