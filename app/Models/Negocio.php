<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Sanctum\Contracts\HasAbilities;

class Negocio extends Model
{
    //Tabela negocios
    protected $table = 'negocios';
    /**
     * @var string Primary key de negocio
     */
    protected $primaryKey = 'id';

    /**
     * @var array Atributos de negocio
     */
    protected $fillable = [
        'descricao',
        'data',
        'responsavel',
        'valor'
    ];

    /**
     * @var string[] Atributos nao fillable
     */
    protected $guarded = ['xid'];

    /**
     * @var string[] Atributos escondidos da serializacao
     */
    protected $hidden = ['id'];

    /**
     * @return string[] Cast de atributos
     */
    protected function casts(): array
    {
        return [
            'created_at' => 'datetime:d/m/Y H:i:s',
            'updated_at' => 'datetime:d/m/Y H:i:s',
            'data' => 'datetime:d/m/Y H:i:s',
            'valor' => 'float'
        ];
    }

    /**
     * Relacionamento N<->N entre clientes pessoa fis e negocio
     * @return BelongsToMany
     */
    public function clientes():BelongsToMany
    {
        return $this->belongsToMany(ClientePessoaFis::class, 'contatos', 'negocio', 'cliente');
    }

    /**
     * Relacionamento N<->N entre clientes jur e negocio
     * @return BelongsToMany
     */
    public function clientesJur()
    {
        return $this->belongsToMany(ClientePessoaJur::class, 'contatos_jur', 'negocio', 'cliente_jur');
    }
}
