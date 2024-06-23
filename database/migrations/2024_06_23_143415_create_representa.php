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
        Schema::create('representa', function (Blueprint $table) {
            $table->timestamps();
            $table->softDeletes();
            $table->integer('advogado');
            $table->bigInteger('processo');
            $table->primary(['advogado', 'processo']);

            //constraint
            $table->foreign('advogado','fk_representa_adv')
                ->references('id')
                ->on('advogados');

            $table->foreign('processo','fk_representa_processo')
                ->references('id')
                ->on('processos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('representa');
    }
};
