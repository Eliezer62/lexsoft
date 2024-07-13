<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tribunal extends Model
{
    /**
     * Tabela de tribunal
     * @var string
     */
    protected $table = 'tribunais';

    /**
     * Primary key
     * @var string
     */
    protected $primaryKey = 'id';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'nome',
        'ramo_tribunal'
    ];

    public $timestamps = false;
}
