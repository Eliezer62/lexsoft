<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evento extends Model
{
    use SoftDeletes;

    protected $table = 'eventos';

    protected $primaryKey = 'id';

    protected $fillable = [
        'descricao',
        'ordem',
        'data',
        'processo'
    ];

    protected $guarded = [
        'xid'
    ];

    /**
     * Retorna o processo do evento
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function processo(){
        return $this->belongsTo(Processo::class, 'id', 'processo');
    }
}
