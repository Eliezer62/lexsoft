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
        Schema::create('eventos', function (Blueprint $table) {
            $table->bigIncrements('id')->primary();
            $table->timestamps();
            $table->softDeletes();
            $table->char('xid', 20)
                ->default('xid()')
                ->unique('uc_eventos_xid');
            $table->string('descricao');
            $table->integer('ordem');
            $table->date('data');
            $table->bigInteger('processo');

            //constraint
            $table->foreign('processo')
                ->references('id')
                ->on('processos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
