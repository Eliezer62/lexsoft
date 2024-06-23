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
        Schema::table('prazos', function (Blueprint $table) {
            //constraints
            $table->foreign('evento', 'fk_prazo_evento')
                ->references('id')
                ->on('eventos');

            $table->foreign('tarefa', 'fk_prazo_tarefa')
                ->references('id')
                ->on('tarefas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
