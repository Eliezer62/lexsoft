<?php

namespace App\Models;

use App\Casts\Advogado;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Processo extends Model
{
    use SoftDeletes;

    /**
     * Tabela processos
     * @var string
     */
    protected $table = 'processos';

    protected $primaryKey = 'id';

    protected $fillable = [
        'xid',
        'numero',
        'valor_causa',
        'valor_condenacao',
        'justica_gratuita',
        'prioridade',
        'instancia',
        'numCNJ',
        'data_criacao',
        'data_distribuicao',
        'classe_judicial',
        'tribunal',
        'vara',
        'comarca'
    ];


    public function advogados()
    {
        return $this->belongsToMany(Advogado::class)
            ->as('partes')
            ->withPivot('qualificacao');
    }
}
