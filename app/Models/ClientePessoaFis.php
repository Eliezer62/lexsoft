<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class ClientePessoaFis extends Model
{
    use Notifiable, SoftDeletes;

    /**
     * Tabela de cliente pessoa física
     * @var string
     */
    protected $table = 'clientes_pessoa_fis';

    /**
     * PK de cliente pessoa fisica
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Dados de cliente pessoa física
     * @var array
     */
    protected $fillable = [
        'xid',
        'nome',
        'nome_social',
        'cpf',
        'rg',
        'email',
        'sexo',
        'estado_civil',
        'nome_pai',
        'nome_mae',
        'naturalidade',
        'naturalidade_uf',
        'profissao',
        'data_nascimento'
    ];

    protected $hidden = [
        'id'
    ];


    public function processos()
    {
        return $this->belongsToMany(Processo::class)
            ->as('partes')
            ->withPivot('qualificacao');
    }
}
