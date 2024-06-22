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
        Schema::create('clientes_pessoa_jur', function (Blueprint $table) {
            $table->id();
            $table->char('xid',20)
                ->unique('uc_cliente_jur_xid');
            $table->timestamps();
            $table->softDeletes();
            $table->string('razao_social');
            $table->char('cnpj',14)
                ->unique('uc_cliente_jur_cnpj');
            $table->string('nome_fantasia')->nullable();
            $table->string('email')->nullable();
            $table->integer('administrador');

            //constraint
            $table->foreign('administrador')
                ->references('id')
                ->on('clientes_pessoa_fis');

            //index
            $table->index('cnpj', 'index_cliente_jur_cnpj');
            $table->index(['razao_social', 'nome_fantasia'], 'index_cliente_jur_nome');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes_pessoa_jur');
    }
};
