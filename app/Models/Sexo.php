<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
    /**
     * Tabela de Sexo
     * @var string
     */
    protected $table = 'sexos';

    /**
     * ID da tabela sexo
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Params de Sexo
     * @var string[]
     */
    protected  $fillable = [
        'sexo'
    ];
}
