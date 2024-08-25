<?php

namespace App\Models;

use App\Casts\ClienteFisicoCast;
use App\Casts\ClienteJurCast;
use App\Casts\ProcessoCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Atendimento extends Model
{
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
        'descricao'
    ];

    protected $guarded = [
        'xid'
    ];

    protected $casts = [
        'clientefis'=>ClienteFisicoCast::class,
        'clientejur'=>ClienteJurCast::class,
        'processo'=> ProcessoCast::class
    ];

    public function processo()
    {
        return $this->belongsTo(Processo::class, 'processo', 'id');
    }
}
