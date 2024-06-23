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
        Schema::create('documentos', function (Blueprint $table) {
            $table->bigIncrements('id')->primary();
            $table->timestamps();
            $table->softDeletes();
            $table->char('xid', 20)
                ->default('xid()')
                ->unique('uc_docs_xid');
            $table->char('tipo_arquivo', 3);
            $table->string('descricao');
            $table->string('src');
            $table->dateTime('data_modificado')->nullable();
            $table->dateTime('data_criacao')->nullable();
            $table->integer('pessoafis')->nullable();
            $table->integer('pessoajur')->nullable();
            $table->bigInteger('processo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentos');
    }
};
