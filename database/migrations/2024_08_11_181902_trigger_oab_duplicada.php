<?php

use Illuminate\Database\Migrations\Migration;
use \Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("
        CREATE OR REPLACE FUNCTION check_oab_duplicada()
        RETURNS trigger AS
        \$BODY\$
        BEGIN
            IF EXISTS( SELECT 1 FROM advogados adv WHERE adv.oab = NEW.oab AND adv.uf_oab = NEW.uf_oab) AND TG_OP = 'INSERT' THEN
                RAISE EXCEPTION 'OAB JÁ FOI VINCULADA A UM ADVOGADO' USING ERRCODE = 'P0004';

            END IF;

            RETURN NEW;
        END;
        \$BODY\$ LANGUAGE plpgsql;
        ");

        DB::statement("
        CREATE OR REPLACE TRIGGER verifica_oab_duplicada
        BEFORE INSERT OR UPDATE ON advogados FOR EACH ROW
        EXECUTE FUNCTION check_oab_duplicada();
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP FUNCTION check_oab_duplicada CASCADE;");
    }
};
