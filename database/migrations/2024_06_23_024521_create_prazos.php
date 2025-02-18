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
        Schema::create('prazos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string('descricao')->nullable();
            $table->datetime('inicio')->nullable();
            $table->datetime('fim')->nullable();
            $table->bigInteger('evento')->nullable();
            $table->bigInteger('tarefa')->nullable();

            //constraint
            $table->foreign('evento', 'fk_prazo_evento')
                ->references('id')
                ->on('eventos')
                ->onDelete('cascade');

            $table->foreign('tarefa', 'fk_prazo_tarefa')
                ->references('id')
                ->on('tarefas')
                ->onDelete('cascade');
            //index
        });

        DB::statement('ALTER TABLE prazos ADD COLUMN xid public.xid DEFAULT xid()');
        DB::statement('ALTER TABLE prazos ADD CONSTRAINT uc_prazos_xid UNIQUE (xid)');
        DB::statement('ALTER TABLE prazos ADD CONSTRAINT chk_prazo_fim_maior CHECK (inicio<fim)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prazos');
    }
};
