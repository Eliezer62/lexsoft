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
        DB::statement("
        CREATE OR REPLACE FUNCTION check_processos()
        RETURNS trigger AS
        \$BODY\$
        BEGIN
        IF NEW.valor_causa < NEW.valor_condenacao THEN
            RAISE EXCEPTION 'Valor de condenação deve ser menor que o valor da causa' USING ERRCODE = 'P0001';

        ELSIF NEW.data_criacao::DATE > NEW.data_distribuicao::DATE THEN
            RAISE EXCEPTION 'Data de criação deve ocorrer antes da data de distribuição' USING ERRCODE = 'P0002';

        ELSIF NEW.valor_causa < 0.0 THEN
            RAISE EXCEPTION 'Valor da causa deve ser positiva' USING ERRCODE = 'P0003';

        ELSIF NEW.valor_condenacao < 0.0 THEN
            RAISE EXCEPTION 'Valor de condenação deve ser positivo' USING ERRCODE = 'P0004';

        END IF;

        RETURN NEW;
    END;
    \$BODY\$ LANGUAGE plpgsql;");

        DB::statement("
        CREATE OR REPLACE TRIGGER verifica_processos
        BEFORE INSERT OR UPDATE ON processos FOR EACH ROW
        EXECUTE FUNCTION check_processos();
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP FUNCTION IF EXISTS check_processos CASCADE');
    }
};
