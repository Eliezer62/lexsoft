<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    /**
     * Tabela de enderecos
     * @var string
     */
    protected $table = 'enderecos';

    /**
     * PK endereco
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Dados de Endereco
     * @var array
     */
    protected $fillable = [
        'logradouro',
        'numero',
        'cidade',
        'estado',
        'cep',
        'bairro',
        'complemento',
        'pessoafis',
        'pessoajur'
    ];

    protected $guarded = [
        'xid'
    ];

    protected $hidden = [
        'pessoafis',
        'pessoajur'
    ];
}
