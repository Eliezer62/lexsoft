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
            $table->timestamps();
            $table->softDeletes();
            $table->string('razao_social')
                ->unique('uc_clientes_jur_razao');
            $table->char('cnpj',14)
                ->unique('uc_cliente_jur_cnpj');
            $table->string('nome_fantasia')->nullable();
            $table->string('email')->nullable();
            $table->integer('administrador')->nullable();

            //constraint
            $table->foreign('administrador', 'fk_p_jur_adm')
                ->references('id')
                ->on('clientes_pessoa_fis')
                ->onDelete('SET NULL');

            //index
            $table->index('cnpj', 'index_cliente_jur_cnpj');
            $table->index(['razao_social', 'nome_fantasia'], 'index_cliente_jur_nome');
        });

        DB::statement('ALTER TABLE clientes_pessoa_jur ADD COLUMN xid public.xid DEFAULT xid()');
        DB::statement('ALTER TABLE clientes_pessoa_jur ADD CONSTRAINT uc_cliente_jur_xid UNIQUE (xid)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes_pessoa_jur');
    }
};
