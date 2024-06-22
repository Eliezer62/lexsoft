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
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->char('xid', 20)
                ->unique('uc_endereco_xid');
            $table->timestamps();
            $table->string('logradouro');
            $table->smallInteger('numero');
            $table->integer('cidade');
            $table->char('estado', 2);
            $table->char('cep', 8);
            $table->string('bairro', 60);
            $table->string('complemento');
            $table->integer('pessoafis')->nullable();
            $table->integer('pessoajur')->nullable();

            //constraint
            $table->foreign('cidade')
                ->references('id')
                ->on('cidades');

            $table->foreign('estado')
                ->references('uf')
                ->on('estados');

            $table->foreign('pessoafis')
                ->references('id')
                ->on('clientes_pessoa_fis');

            $table->foreign('pessoajur')
                ->references('id')
                ->on('clientes_pessoa_jur');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enderecos');
    }
};
