<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Atendimento extends Model
{
    use SoftDeletes;

    /**
     * Tabela de atendimento
     * @var string
     */
    protected $table = 'atendimentos';

    /**
     * Primary key de atendimentos
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Atributos fillable para atendimento
     * @var string[]
     */
    protected $fillable = [
        'clientefis',
        'clientejur',
        'data',
        'assunto',
        'processo',
        'descricao'
    ];

    public function processo()
    {
        return $this->belongsTo(Processo::class, 'processo', 'id');
    }
}
