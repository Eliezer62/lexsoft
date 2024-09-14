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
        CREATE OR REPLACE TRIGGER verifica_email_cliente_jur
        BEFORE INSERT OR UPDATE ON clientes_pessoa_jur FOR EACH ROW
        EXECUTE FUNCTION check_email();
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP TRIGGER IF EXISTS verifica_email_cliente_jur");
    }
};
