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
        CREATE OR REPLACE VIEW view_partes_processo (xid_cliente, cliente, documento, qualificacao, processo, tipo) AS
        (SELECT cf.xid, cf.nome, cf.cpf, q.descricao, p.xid as processo, 'fisico'
        FROM partes
        JOIN clientes_pessoa_fis cf ON partes.clientefis = cf.id
        JOIN processos p ON partes.processo = p.id
        JOIN qualificacoes q ON partes.qualificacao = q.id)
        UNION ALL
        (SELECT cj.xid, cj.razao_social, cj.cnpj, q.descricao, p.xid, 'juridico'
        FROM partes_jur
        JOIN clientes_pessoa_jur cj ON partes_jur.clientejur = cj.id
        JOIN processos p ON partes_jur.processo = p.id
        JOIN qualificacoes q ON partes_jur.qualificacao = q.id);
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP VIEW view_partes_processo;');
    }
};
