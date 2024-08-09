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
        Schema::create('cidades', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 60);
            $table->char('estado',2);

            //Constraint
            $table->foreign('estado', 'fk_cidade_estado')
                ->references('uf')
                ->on('estados')
                ->onDelete('CASCADE');

            $table->unique(['nome','estado'], 'uc_cidade_nomeUF');

            //index
            $table->index('nome', 'index_cidade_nome');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cidades');
    }
};
