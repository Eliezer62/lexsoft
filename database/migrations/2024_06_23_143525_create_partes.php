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
        Schema::create('partes', function (Blueprint $table) {
            $table->bigInteger('processo');
            $table->integer('clientefis');
            $table->primary(['processo', 'clientefis']);
            $table->smallInteger('qualificacao');
            $table->timestamps();
            $table->softDeletes();

            //constraint
            $table->foreign('processo', 'fk_partes_processo')
                ->references('id')->on('processos');

            $table->foreign('clientefis','fk_partes_clientefis')
                ->references('id')->on('clientes_pessoa_fis');

            $table->foreign('qualificacao','fk_partes_qualificacao')
                ->references('id')->on('qualificacoes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partes');
    }
};
