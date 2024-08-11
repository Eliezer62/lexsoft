<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("
        CREATE OR REPLACE FUNCTION check_duplicados_advogado()
        RETURNS trigger AS
        \$BODY\$
        BEGIN
            IF EXISTS( SELECT 1 FROM advogados adv WHERE adv.cpf = NEW.cpf) THEN
                RAISE EXCEPTION 'CPF JÁ FOI VINCULADO A UM ADVOGADO' USING ERRCODE = 'P0002';

            ELSIF EXISTS( SELECT 1 FROM advogados adv WHERE adv.email = NEW.email) THEN
                RAISE EXCEPTION 'E-MAIL JÁ FOI VINCULADO A UM ADVOGADO' USING ERRCODE = 'P0003';
            END IF;

            RETURN NEW;
        END;
        \$BODY\$ LANGUAGE plpgsql;
        ");
        DB::statement("
        CREATE OR REPLACE TRIGGER verifica_duplicados_advogado
        BEFORE INSERT ON advogados FOR EACH ROW
        EXECUTE FUNCTION check_duplicados_advogado();
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP FUNCTION check_duplicados_advogado CASCADE;");
    }
};
