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
        'descricao',
        'responsavel',
        'status'
    ];


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
}
