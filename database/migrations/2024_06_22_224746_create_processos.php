<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('processos', function (Blueprint $table) {
            $table->bigIncrements('id')->primary();
            $table->char('xid', 20)
                ->default('xid()')
                ->unique('uc_processos_xid');
            $table->timestamps();
            $table->softDeletes();
            $table->varchar('numero', 20)
                    ->unique('uc_processos_numero');
            $table->decimal('valor_causa', 15, 2)->nullable();
            $table->decimal('valor_condenacao', 15, 2)->nullable();
            $table->boolean('justica_gratuita')->default(false);
            $table->char('instancia',1)->nullable();
            $table->char('numCNJ', 20)
                    ->nullable()
                    ->unique('uc_processos_numcnj');
            $table->date('data_criacao');
            $table->date('data_distribuicao')->nullable();
            $table->smallInteger('classe_judicial');
            $table->char('tribunal', 2);
            $table->integer('vara');
            $table->integer('comarca');

            //Constraints
            $table->foreign('tribunal')
                ->references('id')
                ->on('tribunais');

            $table->foreign('comarca')
                ->references('id')
                ->on('comarcas');

            $table->foreign('vara')
                ->references('id')
                ->on('varas');

            $table->foreign('classe_judicial')
                ->references('id')
                ->on('classes_judiciais');

            //Indexes
            $table->index('numero', 'index_processos_numero');
            $table->index('numCNJ', 'index_processos_numcnj');

        });

        DB::statement('
        ALTER TABLE processos
            ADD CONSTRAINT ck_valor_causa
                CHECK (valor_causa >= 0);
        ');

        DB::statement('
        ALTER TABLE processos
        ADD CONSTRAINT ck_valor_condenacao
        CHECK (valor_condenacao >= 0);
        ');

        DB::statement('
            ALTER TABLE processos
            ADD CONSTRAINT ck_valor_cond_menor
            CHECK (valor_condenacao <= valor_causa);
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('processos');

        DB::statement('
        ALTER TABLE processos
            DROP CONSTRAINT ck_valor_causa;
        ');

        DB::statement('
        ALTER TABLE processos
        DROP CONSTRAINT ck_valor_condenacao;
        ');

        DB::statement('
            ALTER TABLE processos
            DROP CONSTRAINT ck_valor_cond_menor;
        ');
    }
};
