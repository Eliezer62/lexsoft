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
        Schema::create('contatos', function (Blueprint $table) {
            $table->bigInteger('cliente');
            $table->bigInteger('negocio');

            //CONSTRAINT
            $table->primary(['cliente', 'negocio'], 'pk_contatos_id');
            $table->foreign('cliente')
                    ->references('id')
                    ->on('clientes_pessoa_fis')
                    ->onDelete('cascade');

            $table->foreign('negocio')
                    ->references('id')
                    ->on('negocios')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contatos');
    }
};
