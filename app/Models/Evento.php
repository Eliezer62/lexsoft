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
        'xid',
        'descricao',
        'ordem',
        'data',
        'processo'
    ];
}
