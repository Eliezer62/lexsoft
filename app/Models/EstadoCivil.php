<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoCivil extends Model
{
    /**
     * Tabela de estado civil
     */
    protected $table='estados_civis';

    /**
     * PK estado civil
     * @var string
     */
    protected $primaryKey = 'id';

    public $timestamps = false;
    /**
     * @var
     */
    protected $fillable = [
        'estado_civil'
    ];
}
