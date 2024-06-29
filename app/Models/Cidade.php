<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    /**
     * Tabela do model
     * @var string
     */
    protected $table = 'cidades';

    /**
     * ID da cidade
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Dados do model
     * @var string[]
     */
    protected $fillable = [
        'nome',
        'estado'
    ];

    protected $hidden = [
        'id'
    ];

    /**
     * Retorna o estado do model
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estado()
    {
        return $this->belongsTo(Estado::class, 'uf', 'estado');
    }

}
