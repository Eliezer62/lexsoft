<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Documento extends Model
{
    use SoftDeletes;

    /**
     * Tabela de Documentos
     * @var string
     */
    protected $table = 'documentos';

    /**
     * ID de documento
     * @var string
     */
    protected $primaryKey = 'id';

    protected $fillable = [
        'xid',
        'tipo_arquivo',
        'descricao',
        'src',
        'data_modificado',
        'data_criacao',
        'pessoafis',
        'pessoajur',
        'processo'
    ];
}
