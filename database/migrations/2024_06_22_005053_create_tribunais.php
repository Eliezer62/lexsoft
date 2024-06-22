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
        Schema::create('tribunais', function (Blueprint $table) {
            $table->string('id', 2)->primary();
            $table->string('nome', 60)->unique();
            $table->char('ramo_tribunal', 1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tribunais');
    }
};
