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
        'id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];


    protected $guarded = [
        'xid'
    ];


    protected $with = [
        'sexo',
        'estado_civil',
        'naturalidade',
        'naturalidadeUf',
        'rg'
    ];


    public function sexo()
    {
        return $this->belongsTo(Sexo::class, 'sexo', 'id');
    }


    public function estado_civil()
    {
        return $this->belongsTo(EstadoCivil::class, 'estado_civil', 'id');
    }


    public function naturalidade()
    {
        return $this->belongsTo(Cidade::class, 'naturalidade', 'id');
    }


    public function naturalidadeUf()
    {
        return $this->belongsTo(Estado::class, 'naturalidade_uf', 'uf');
    }


    public function rg()
    {
        return $this->hasOne(RG::class, 'id', 'rg');
    }


    public function processos()
    {
        return $this->belongsToMany(Processo::class, 'partes', 'clientefis', 'processo')
            ->withPivot('qualificacao');
    }


    public function empresas()
    {
        return $this->hasMany(ClientePessoaJur::class, 'id', 'administrador');
    }
}
