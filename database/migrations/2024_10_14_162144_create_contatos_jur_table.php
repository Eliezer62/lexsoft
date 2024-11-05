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
        Schema::create('contatos_jur', function (Blueprint $table) {
            $table->bigInteger('cliente_jur');
            $table->bigInteger('negocio');

            //CONSTRAINT
            $table->primary(['cliente_jur', 'negocio'], 'pk_contatos_jur_id');
            $table->foreign('cliente_jur')
                ->references('id')
                ->on('clientes_pessoa_jur')
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
        Schema::dropIfExists('contatos_jur');
    }
};
