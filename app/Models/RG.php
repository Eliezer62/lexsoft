<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RG extends Model
{
    /**
     * Tabela de RG
     * @var string
     */
    protected $table = 'rgs';

    /**
     * Primary key de rgs
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Dados de RG
     * @var string[]
     */
    protected $fillable = [
        'numero',
        'data_emissao',
        'emissor',
        'estado'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

}
