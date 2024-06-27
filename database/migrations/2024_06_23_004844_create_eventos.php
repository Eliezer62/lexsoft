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
            $table->string('descricao');
            $table->integer('ordem');
            $table->date('data');
            $table->bigInteger('processo');

            //constraint
            $table->foreign('processo')
                ->references('id')
                ->on('processos');
        });
        DB::statement('ALTER TABLE eventos ADD COLUMN xid public.xid DEFAULT xid()');
        DB::statement('ALTER TABLE eventos ADD CONSTRAINT uc_eventos_xid UNIQUE (xid)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
