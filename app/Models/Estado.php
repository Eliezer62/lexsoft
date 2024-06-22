<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    /**
     * Tabela de Estado
     * @var string
     */
    protected $table = 'estados';

    /**
     * PK de estado
     * @var string
     */
    protected $primaryKey = 'uf';

    /**
     * Key type de PK
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Dados de estados
     * @var array
     */
    protected $fillable = [
        'nome'
    ];
}
