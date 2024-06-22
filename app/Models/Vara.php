<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vara extends Model
{
    /**
     * Tabela da Vara
     */
    protected $table = 'varas';

    /**
     * ID da Vara
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Dados da Vara
     * @var array <int, string>
     */
    protected $fillable = [
        'nome',
        'idcnj',
        'comarca'
    ];

    /**
     * Obtém comarca de vara
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function comarca()
    {
        return $this->belongsTo(Comarca::class, 'comarca');
    }

    /**Obtém o tribunal por meio de comarca
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough|\Illuminate\Database\Eloquent\Relations\HasOneThrough
     */
    public function tribunal()
    {
        return $this->through(Comarca::class)->has(Tribunal::class);
    }

}
