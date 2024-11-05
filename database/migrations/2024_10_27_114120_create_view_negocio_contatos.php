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
        DB::statement('
        CREATE OR REPLACE VIEW view_negocio_contatos AS
        SELECT * FROM (
            (SELECT n.id as negocio, cf.xid as xid, cf.nome as nome, cf.cpf as documento, \'fisico\' as tipo
            FROM contatos
            LEFT JOIN clientes_pessoa_fis cf ON cf.id = contatos.cliente
            LEFT JOIN negocios n ON n.id = contatos.negocio
            )
            UNION ALL
            (SELECT n.id as negocio, cj.xid, cj.razao_social, cj.cnpj, \'juridico\'
            FROM contatos_jur
            LEFT JOIN clientes_pessoa_jur cj ON cj.id = contatos_jur.cliente_jur
            LEFT JOIN negocios n ON n.id = contatos_jur.negocio )
        ) dum ORDER BY dum.nome;
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP VIEW view_negocio_contatos;');
    }
};
