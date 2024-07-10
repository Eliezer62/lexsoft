<?php

namespace App\Models;

use App\Enum\TarefaStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    /**
     * Primary key de tarefa
     * @var string
     */
    protected $primaryKey = 'id';

    protected $table = 'tarefas';

    protected $fillable = [
        'assunto',
        'descricao',
        'responsavel',
        'status'
    ];

    protected $guarded = ['xid'];

    protected $hidden = ['id', 'updated_at', 'created_at'];

    protected $casts = [
        'status'=>TarefaStatus::class
    ];

    /**
     * Retorna o responsavel da tarefa
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function responsavel()
    {
        return $this->belongsTo(Advogado::class, 'responsavel', 'id');
    }

    public function prazo()
    {
        return $this->hasOne(Prazo::class, 'tarefa', 'id');
    }
}
