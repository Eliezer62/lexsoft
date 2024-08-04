<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class ClientePessoaJur extends Model
{
    use Notifiable;

    /**
     * Tabela de Cliente Pessoa Jurídica
     * @var string
     */
    protected $table = 'clientes_pessoa_jur';

    /**
     * ID da pessoa jur
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Atributos de Cliente Pessoa Jur
     * @var string[]
     */
    protected $fillable = [
        'xid',
        'razao_social',
        'cnpj',
        'nome_fantasia',
        'email',
        'administrador'
    ];

    protected $hidden = ['id'];


    public function processos()
    {
        return $this->belongsToMany(Processo::class, 'partes_jur', 'clientefis', 'processo')
            ->withPivot('qualificacao');
    }


    public function administrador()
    {
        return $this->belongsTo(ClientePessoaFis::class, 'administrador', 'id');
    }
}
