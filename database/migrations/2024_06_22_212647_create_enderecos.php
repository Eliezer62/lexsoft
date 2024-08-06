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
            $table->timestamps();
            $table->string('logradouro');
            $table->smallInteger('numero');
            $table->integer('cidade');
            $table->char('estado', 2);
            $table->char('cep', 8);
            $table->string('bairro', 60);
            $table->string('complemento')->nullable();
            $table->integer('pessoafis')->nullable();
            $table->integer('pessoajur')->nullable();

            //constraint
            $table->foreign('cidade', 'fk_end_cidade')
                ->references('id')
                ->on('cidades');

            $table->foreign('estado', 'fk_end_estado')
                ->references('uf')
                ->on('estados');

            $table->foreign('pessoafis', 'fk_end_pessoa_fis')
                ->references('id')
                ->on('clientes_pessoa_fis')
                ->onDelete('CASCADE');

            $table->foreign('pessoajur', 'fk_end_pessoajur')
                ->references('id')
                ->on('clientes_pessoa_jur')
                ->onDelete('CASCADE');
        });
        DB::statement('ALTER TABLE enderecos ADD COLUMN xid public.xid DEFAULT xid()');
        DB::statement('ALTER TABLE enderecos ADD CONSTRAINT uc_end_xid UNIQUE (xid)');

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enderecos');
    }
};
