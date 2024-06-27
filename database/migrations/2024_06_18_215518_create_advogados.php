<?php

use Illuminate\Database\Grammar;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Grammar::macro('typeXid', function () {
            return 'xid';
        });

        Schema::create('advogados', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->char('cpf', 11)->unique('uc_adv_cpf');
            $table->string('nome', 60);
            $table->string('oab', 6);
            $table->char('uf_oab', 2);
            $table->string('email')->unique('uc_adv_email');
            $table->string('password');
            $table->string('grupo', 60);
            $table->softDeletes();
            //constraints
            $table->unique(['oab', 'uf_oab'], 'uc_adv_oab');

            $table->foreign('grupo')
                ->references('grupo')
                ->on('grupo_usuarios');

            $table->foreign('uf_oab')
                ->references('uf')
                ->on('estados');

            //index
            $table->index('cpf', 'index_adv_cpf');
            $table->index('email', 'index_adv_email');
            $table->index('oab', 'index_oab_email');
        });
        DB::statement('ALTER TABLE advogados ADD COLUMN xid public.xid DEFAULT xid()');
        DB::statement('ALTER TABLE advogados ADD CONSTRAINT uc_adv_xid UNIQUE (xid)');

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advogados');
    }
};
