<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("
        CREATE OR REPLACE FUNCTION check_pessoa_fis()
        RETURNS trigger AS
        \$BODY\$
        BEGIN
            IF NEW.data_nascimento > CURRENT_DATE THEN
                RAISE EXCEPTION 'Data de nascimento não pode ser futura' USING ERRCODE = 'P0001';

            ELSIF EXISTS(SELECT 1 FROM clientes_pessoa_fis cf WHERE NEW.cpf = cf.cpf) AND TG_OP = 'INSERT' THEN
                RAISE EXCEPTION 'CPF já cadastrado anteriormente' USING ERRCODE = 'P0002';

            END IF;

            RETURN NEW;
        END;
        \$BODY\$ LANGUAGE plpgsql;
        ");

        DB::statement("
        CREATE OR REPLACE TRIGGER verifica_pessoa_fis
        BEFORE INSERT OR UPDATE ON clientes_pessoa_fis FOR EACH ROW
        EXECUTE FUNCTION check_pessoa_fis();
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP FUNCTION IF EXISTS check_pessoa_fis CASCADE");
    }
};
