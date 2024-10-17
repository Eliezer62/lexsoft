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
        Schema::create('negocios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->text('descricao');
            $table->dateTime('data')->default('NOW()');
            $table->bigInteger('responsavel')->nullable();

            $table->enum('fase', ['inicial', 'qualificacao', 'avaliacao', 'proposta', 'negociacao', 'fechado', 'perdido'])
                ->default('inicial');
            $table->enum('prioridade', ['baixa', 'média','alta', 'urgente'])
                ->default('baixa');

            //CONSTRAINT
            $table->foreign('responsavel', 'fk_negocios_resp')
                ->references('id')
                ->on('advogados')
                ->onDelete('cascade');

        });

        DB::statement('ALTER TABLE negocios ADD COLUMN xid public.xid DEFAULT xid()');
        DB::statement('ALTER TABLE negocios ADD CONSTRAINT uc_negocios_xid UNIQUE (xid)');
        DB::statement('ALTER TABLE negocios ADD CONSTRAINT chk_negocios_data_passada CHECK (data <= NOW())');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('negocios');
    }
};
