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
        DB::statement("CREATE VIEW view_documentos AS SELECT doc.xid, doc.descricao, doc.data_criacao,
            COALESCE((SELECT nome FROM clientes_pessoa_fis cf WHERE cf.id = doc.pessoafis),(SELECT razao_social FROM clientes_pessoa_jur cj WHERE cj.id=doc.pessoajur))
            AS cliente,
            COALESCE((SELECT cpf FROM clientes_pessoa_fis cf WHERE cf.id = doc.pessoafis),(SELECT cnpj FROM clientes_pessoa_jur cj WHERE cj.id=doc.pessoajur))
            AS documento
            FROM documentos doc
            WHERE deleted_at IS NULL;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP VIEW IF EXISTS view_documentos;');
    }
};
