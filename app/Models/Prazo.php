<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Prazo extends Model
{
    use SoftDeletes;

    /**
     * Tabela do model
     * @var string
     */
    protected $table = 'prazos';

    /**
     * Chave primaria do codigo
     *
     * @var string
     */
    protected $primarykey = 'id';

    /**
     * Atributos do model
     * @var array<int, string>
     */
    protected $fillable = [
        'descricao',
        'inicio',
        'fim',
        'evento',
        'tarefa'
    ];

    protected $guarded = [
        'xid'
    ];


    protected function casts():array
    {
        return [
            'inicio'=>'datetime:d/m/Y HH:MM:SS',
            'fim'=>'datetime:d/m/Y HH:MM:SS',
            'descricao'=>'string'
        ];
    }

    public function tarefa()
    {

    }


    public function evento()
    {

    }
}
