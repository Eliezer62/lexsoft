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
            $table->integer('rg')->nullable();
            $table->string('email')->nullable();
            $table->smallInteger('sexo');
            $table->smallInteger('estado_civil');
            $table->string('nome_pai', 60)->nullable();
            $table->string('nome_mae', 60)->nullable();
            $table->integer('naturalidade')->nullable();
            $table->char('naturalidade_uf', 2)->nullable();
            $table->boolean('estrangeiro')->default(false);
            $table->string('profissao', 60);
            $table->date('data_nascimento');

            //constraints
            $table->foreign('rg', 'fk_p_fis_rg')
                ->references('id')
                ->on('rgs')
                ->onDelete('SET NULL');

            $table->foreign('sexo', 'fk_p_fis_sexo')
                ->references('id')
                ->on('sexos')
                ->onDelete('SET NULL');

            $table->foreign('estado_civil', 'fk_p_fis_estado_civil')
                ->references('id')
                ->on('estados_civis')
                ->onDelete('SET NULL');

            $table->foreign('naturalidade', 'fk_p_fis_naturalidade')
                ->references('id')
                ->on('cidades')
                ->onDelete('SET NULL');

            $table->foreign('naturalidade_uf', 'fk_p_fis_natu_uf')
                ->references('uf')
                ->on('estados')
                ->onDelete('SET NULL');

            //Index
            $table->index('cpf', 'index_cliente_cpf');
            $table->index('email','index_cliente_email');
            $table->index('nome_social','index_cliente_nome_social');
            $table->index('nome','index_cliente_nome');
        });
        DB::statement('ALTER TABLE clientes_pessoa_fis ADD COLUMN xid public.xid DEFAULT xid()');
        DB::statement('ALTER TABLE clientes_pessoa_fis ADD CONSTRAINT uc_cliente_xid UNIQUE (xid)');
        DB::statement('ALTER TABLE clientes_pessoa_fis
                        ADD CONSTRAINT check_cf_estrangeiro
                        CHECK (
                            (estrangeiro IS TRUE AND (naturalidade IS NULL AND naturalidade_uf IS NULL)) OR estrangeiro IS FALSE
                        )
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes_pessoa_fis');
    }
};
