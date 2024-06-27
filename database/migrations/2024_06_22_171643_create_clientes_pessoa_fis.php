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
        Schema::create('clientes_pessoa_fis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string('nome', 60);
            $table->string('nome_social', 60)->nullable();
            $table->char('cpf', 11)
                ->unique('uc_cliente_cpf');
            $table->integer('rg');
            $table->string('email')->nullable();
            $table->smallInteger('sexo');
            $table->smallInteger('estado_civil');
            $table->string('nome_pai', 60)->nullable();
            $table->string('nome_mae', 60)->nullable();
            $table->integer('naturalidade');
            $table->char('naturalidade_uf', 2);
            $table->string('profissao', 60);
            $table->date('data_nascimento');

            //constraints
            $table->foreign('rg')
                ->references('id')
                ->on('rgs');

            $table->foreign('sexo')
                ->references('id')
                ->on('sexos');

            $table->foreign('estado_civil')
                ->references('id')
                ->on('estados_civis');

            $table->foreign('naturalidade')
                ->references('id')
                ->on('cidades');

            $table->foreign('naturalidade_uf')
                ->references('uf')
                ->on('estados');

            //Index
            $table->index('cpf', 'index_cliente_cpf');
            $table->index('email','index_cliente_email');
            $table->index('nome_social','index_cliente_nome_social');
            $table->index('nome','index_cliente_nome');
        });
        DB::statement('ALTER TABLE clientes_pessoa_fis ADD COLUMN xid public.xid DEFAULT xid()');
        DB::statement('ALTER TABLE clientes_pessoa_fis ADD CONSTRAINT uc_cliente_xid UNIQUE (xid)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes_pessoa_fis');
    }
};
