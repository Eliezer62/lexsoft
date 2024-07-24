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
        //Tabela para o relacionamento N<->N entre eventos e processos
        Schema::create('vinculados', function (Blueprint $table) {
            $table->bigInteger('evento')->comment('FK para tb eventos');
            $table->bigInteger('documento')->comment('FK para tb documentos');

            //primary key
            $table->primary(['evento', 'documento'],'pk_vinculados');

            //foreign key
            $table->foreign('evento', 'fk_vinculados_evento')
                    ->references('id')->on('eventos');

            $table->foreign('documento', 'fk_vinculados_documento')
                    ->references('id')->on('documentos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vinculados');
    }
};
