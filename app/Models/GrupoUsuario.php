<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoUsuario extends Model
{
    /**
     * Primary key de grupo
     * @var string
     */
    protected $primaryKey = 'grupo';

    public $timestamps = false;

    public $incrementing = false;

    /**
     * Atributos de Grupo de Usuario
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'grupo',
        'descricao'
    ];

    /**
     * Obtem todos os advogados do Grupo de usuario
     *
     * @return Array<int, Advogado::class>
     */
    public function advogados()
    {
        return $this->hasMany(Advogado::class);
    }
}
