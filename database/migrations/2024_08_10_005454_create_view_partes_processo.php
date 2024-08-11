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
            CREATE OR REPLACE VIEW public.view_partes_processo
            AS
             SELECT cf.xid AS xid_cliente,
                cf.nome AS cliente,
                cf.cpf AS documento,
                q.descricao AS qualificacao,
                p.xid AS processo,
                'fisico'::text AS tipo
               FROM partes
                 JOIN clientes_pessoa_fis cf ON partes.clientefis = cf.id
                 JOIN processos p ON partes.processo = p.id
                 JOIN qualificacoes q ON partes.qualificacao = q.id
            UNION ALL
             SELECT cj.xid AS xid_cliente,
                cj.razao_social AS cliente,
                cj.cnpj AS documento,
                q.descricao AS qualificacao,
                p.xid AS processo,
                'juridico'::text AS tipo
               FROM partes_jur
                 JOIN clientes_pessoa_jur cj ON partes_jur.clientejur = cj.id
                 JOIN processos p ON partes_jur.processo = p.id
                 JOIN qualificacoes q ON partes_jur.qualificacao = q.id;
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
