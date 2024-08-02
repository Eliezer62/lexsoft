<?php

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
        DB::statement("
        CREATE OR REPLACE FUNCTION public.validar_cpf()
        RETURNS trigger
        LANGUAGE plpgsql
        AS $$
        DECLARE
            cpf CHAR(11) := NEW.CPF;
            digitos VARCHAR[];
            contador INTEGER := 0;
            MULTI INTEGER := 10;
            MULTI2 INTEGER := 11;
            v1 INTEGER := 0;
            v2 INTEGER := 0;
            tempp INTEGER := 0;

        BEGIN

            digitos := ('{'|| substring(cpf,1,1) ||', '|| substring(cpf,2,1) ||', '|| substring(cpf,3,1)
                    ||', '|| substring(cpf,4,1)  ||', '||  substring(cpf,5,1)      ||', '|| substring(cpf,6,1)
                    ||', '|| substring(cpf,7,1)  ||', '||  substring(cpf,8,1)      ||', '||  substring(cpf,9,1)
                    ||', '|| substring(cpf,10,1) ||', '||  substring(cpf,11,1)     ||'}');

            -- PRIMEIRO DIGITO
            FOR contador IN 1..9 LOOP
                tempp := digitos[contador];
                v1 := v1 + (tempp*MULTI);
                MULTI := MULTI - 1;
            END LOOP;

            v1 := ((v1%11));

            IF (v1 < 2) THEN v1 := 0;
            ELSE v1 := 11 - v1;
            END IF;

            FOR contador IN 1..10 LOOP
                tempp := digitos[contador];
                v2 := v2 + (tempp*MULTI2);
                MULTI2 := MULTI2 - 1;
            END LOOP;

            v2 := ((v2 % 11)) AS INTEGER;
            IF (v2 < 2) THEN
                v2 := 0;
            ELSE v2 := 11 - v2;
            END IF;

            IF ((v1::VARCHAR = SUBSTRING(cpf, 10, 1)) AND (v2::VARCHAR = SUBSTRING(cpf, 11, 1))) THEN
                RETURN new;
            ELSE
                RAISE EXCEPTION 'CPF INVÁLIDO';
            END IF;
        END;
        $$;
        ");
        DB::statement("
            CREATE TRIGGER tg_advs_validarCPF
            BEFORE INSERT ON advogados
            FOR EACH ROW EXECUTE FUNCTION validar_cpf();
         ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP TRIGGER tg_advs_validarCPF ON advogados CASCADE;");
    }
};
