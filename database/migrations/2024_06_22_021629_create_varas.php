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
        Schema::create('varas', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 60)
                    ->index('index_varas_nome');
            $table->char('idcnj',4)->nullable();
            $table->integer('comarca')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('varas');
    }
};
