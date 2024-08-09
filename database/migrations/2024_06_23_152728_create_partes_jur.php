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
        Schema::create('partes_jur', function (Blueprint $table) {
            $table->timestamps();
            $table->softDeletes();
            $table->integer('clientejur');
            $table->bigInteger('processo');
            $table->primary(['clientejur', 'processo']);
            $table->smallInteger('qualificacao');

            //constraint
            $table->foreign('clientejur')
                ->references('id')
                ->on('clientes_pessoa_jur')
                ->onDelete('CASCADE');

            $table->foreign('processo')
                ->references('id')
                ->on('processos')
                ->onDelete('CASCADE');

            $table->foreign('qualificacao')
                ->references('id')
                ->on('qualificacoes')
                ->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partes_jur');
    }
};
