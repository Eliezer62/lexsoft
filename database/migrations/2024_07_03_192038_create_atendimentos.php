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
        Schema::create('atendimentos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->bigInteger('clientefis')->nullable();
            $table->bigInteger('clientejur')->nullable();
            $table->dateTime('data')->nullable();
            $table->string('assunto');
            $table->bigInteger('processo')->nullable();

            $table->text('descricao')->nullable();

            //constraints
            $table->foreign('clientefis', 'fk_atendimentos_clientefis')
                ->references('id')
                ->on('clientes_pessoa_fis');

            $table->foreign('clientejur', 'fk_atendimentos_clientejur')
                ->references('id')
                ->on('clientes_pessoa_jur');

            $table->foreign('processo', 'fk_atendimentos_processo')
                ->references('id')
                ->on('processos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atendimentos');
    }
};
