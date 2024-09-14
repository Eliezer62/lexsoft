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
        DB::statement("
        CREATE OR REPLACE FUNCTION check_email()
        RETURNS trigger AS
        \$BODY\$
        BEGIN
            IF(NEW.email !~ '^[a-zA-Z0-9.!#$%&''*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$') THEN
                RAISE EXCEPTION 'E-MAIL inválido' USING ERRCODE = 'P7777';
            END IF;
            RETURN NEW;
        END;
        \$BODY\$
        LANGUAGE plpgsql;
        ");
        DB::statement("
        CREATE OR REPLACE TRIGGER verifica_email_adv
        BEFORE INSERT OR UPDATE ON advogados FOR EACH ROW
        EXECUTE FUNCTION check_email();
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP FUNCTION IF EXISTS check_email CASCADE");
    }
};
