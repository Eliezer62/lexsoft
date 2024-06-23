<?php

namespace App\Models;
namespace App\Casts;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Processo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;


class Advogado extends Authenticatable
{
    use Notifiable, SoftDeletes;

    protected $table = 'advogados';

    /**
     * Primary key de Advogado
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Ativa criado em e atualizado na tabela
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * Os atributos do model Advogado.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'xid',
        'cpf',
        'nome',
        'email',
        'password',
        'oab',
        'uf_oab',
        'grupo',
        'primeiro_login'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'id'
    ];

    /**
     * Serializacao dos Accessors
     *
     * @var array<int, string>
     */
    protected $appends = [

    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime:d/m/Y',
            'password' => 'hashed',
            'xid' => 'string',
            'cpf' => 'string',
            'nome' => 'string',
            'email' => 'string',
            'oab' => 'string',
            'uf_oab' => 'string',
            'primeiro_login' => 'bool',
            'created_at' => 'datetime:d/m/Y HH:MM:SS',
            'updated_at' => 'datetime:d/m/Y HH:MM:SS'
        ];
    }


    public function grupo()
    {
        return $this->belongsTo(Advogado::class);
    }


    public function processos()
    {
        return $this->belongsToMany(Processo::class)
            ->as('representa');
    }
}
