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
        CREATE OR REPLACE FUNCTION check_pessoa_jur()
        RETURNS trigger AS
        \$BODY\$
        BEGIN
            IF EXISTS(SELECT 1 FROM clientes_pessoa_jur cj WHERE NEW.razao_social = cj.razao_social) AND TG_OP = 'INSERT' THEN
                RAISE EXCEPTION 'Razão social já cadastrado anteriormente' USING ERRCODE = 'P0002';

            ELSIF EXISTS(SELECT 1 FROM clientes_pessoa_jur cj WHERE NEW.cnpj = cj.cnpj) AND TG_OP = 'INSERT' THEN
                    RAISE EXCEPTION 'CNPJ já cadastrado anteriormente' USING ERRCODE = 'P0003';

            END IF;

            RETURN NEW;
        END;
        \$BODY\$ LANGUAGE plpgsql;
        ");

        DB::statement("
        CREATE OR REPLACE TRIGGER verifica_pessoa_jur
        BEFORE INSERT OR UPDATE ON clientes_pessoa_jur FOR EACH ROW
        EXECUTE FUNCTION check_pessoa_jur();");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP FUNCTION IF EXISTS check_pessoa_jur CASCADE");
    }
};
