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
        Schema::create('telefones', function (Blueprint $table) {
            $table->id();
            $table->char('ddi', 4)->default('+55');
            $table->char('ddd');
            $table->char('numero', 12);
            $table->integer('pessoafis')->nullable();
            $table->integer('pessoajur')->nullable();

            //constraint
            $table->foreign('pessoafis', 'fk_tel_p_fis')
                ->references('id')
                ->on('clientes_pessoa_fis')
                ->onDelete('CASCADE');

            $table->foreign('pessoajur', 'fk_tel_p_jur')
                ->references('id')
                ->on('clientes_pessoa_jur')
                ->onDelete('CASCADE');

            DB::statement('ALTER TABLE telefones ADD COLUMN xid public.xid DEFAULT xid()');
            DB::statement('ALTER TABLE telefones ADD CONSTRAINT uc_tel_xid UNIQUE (xid)');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('telefones');
    }
};
