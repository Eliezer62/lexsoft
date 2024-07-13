<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClasseJudicial extends Model
{
    protected $table = 'classes_judiciais';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'descricao'
    ];

    public $timestamps = false;
}
