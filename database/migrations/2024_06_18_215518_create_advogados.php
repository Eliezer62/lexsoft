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
        Schema::create('advogados', function (Blueprint $table) {
            $table->id();
            $table->string('xid', 20)->storedAs('xid()')->unique('uc_adv_xid');
            $table->timestamps();
            $table->string('cpf', 11)->unique('uc_adv_cpf');
            $table->string('nome', 60);
            $table->string('oab', 6);
            $table->string('uf_oab', 2);
            $table->string('email')->unique('uc_adv_email');
            $table->string('password');
            $table->string('grupo', 60);
            $table->softDeletes();
            
            //constraints
            $table->unique(['oab', 'uf_oab'], 'uc_adv_oab');

            $table->foreign('grupo')
                ->references('grupo')
                ->on('grupo_usuario');

            $table->foreign('uf_oab')
                ->references('uf')
                ->on('estados');

            //index
            $table->index('cpf', 'index_adv_cpf');
            $table->index('email', 'index_adv_email');
            $table->index('oab', 'index_oab_email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advogados');
    }
};
