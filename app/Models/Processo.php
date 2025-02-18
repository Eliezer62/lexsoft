<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Processo extends Model
{
    /**
     * Tabela processos
     * @var string
     */
    protected $table = 'processos';

    protected $primaryKey = 'id';

    protected $fillable = [
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

    protected $guarded = [
        'xid'
    ];

    protected $hidden = [
        'id',
        'updated_at',
        'created_at',
        'deleted_at'
    ];


    public function advogados()
    {
        return $this->belongsToMany(Advogado::class, 'representa', 'processo', 'advogado');
    }

    /**
     * Retorna as partes pessoa física de um processo
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function partes()
    {
        return $this->belongsToMany(ClientePessoaFis::class, 'partes', 'processo', 'clientefis')
            ->withPivot('qualificacao');
    }

    /**
     * Retorna as partes pessoa juridica do processo
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function partes_jur()
    {
        return $this->belongsToMany(ClientePessoaJur::class, 'partes_jur', 'processo', 'clientejur')
            ->withPivot('qualificacao');
    }

    public function vara()
    {
        return $this->hasOne(Vara::class, 'id', 'vara');
    }

    public function comarca()
    {
        return $this->hasOne(Comarca::class, 'id', 'comarca');
    }
}
