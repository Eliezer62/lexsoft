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
            $table->char('tipo_arquivo', 5);
            $table->string('descricao');
            $table->string('src');
            $table->dateTime('data_criacao')->nullable();
            $table->integer('pessoafis')->nullable();
            $table->integer('pessoajur')->nullable();
            $table->bigInteger('processo')->nullable();
        });
        DB::statement('ALTER TABLE documentos ADD COLUMN xid public.xid DEFAULT xid()');
        DB::statement('ALTER TABLE documentos ADD CONSTRAINT uc_doc_xid UNIQUE (xid)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentos');
    }
};
