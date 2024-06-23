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
        Schema::create('telefones', function (Blueprint $table) {
            $table->id();
            $table->char('xid')
                ->default('xid()')
                ->unique('uc_telefones_xid');
            $table->char('ddi', 4)->default('+55');
            $table->char('ddd');
            $table->char('numero', 12);
            $table->integer('pessoafis')->nullable();
            $table->integer('pessoajur')->nullable();

            //constraint
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
        Schema::dropIfExists('telefones');
    }
};
