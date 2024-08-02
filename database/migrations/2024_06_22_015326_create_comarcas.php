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
        Schema::create('comarcas', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 60)
                    ->index('index_comarca_nome');
            $table->char('tribunal', 3);

            //Constraints
            $table->foreign('tribunal', 'fk_comarca_tb')
                ->references('id')
                ->on('tribunais');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comarcas');
    }
};
