<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualificacao extends Model
{
    protected $table = 'qualificacoes';

    protected $primaryKey = 'id';

    protected $fillable = [
        'descricao'
    ];
}
