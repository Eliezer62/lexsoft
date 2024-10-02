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
        Schema::create('rgs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->integer('numero');
            $table->dateTime('data_emissao');
            $table->string('emissor', 10);
            $table->char('estado', 2);

            //constraint
            $table->foreign('estado', 'fk_rgs_estado')
                ->references('uf')
                ->on('estados')
                ->onDelete('SET NULL');
            $table->unique(['numero', 'estado']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rgs');
    }
};
