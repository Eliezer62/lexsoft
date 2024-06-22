<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $primaryKey = 'id';

    protected $table = 'telefones';

    protected $fillable = [
        'xid',
        'ddi',
        'ddd',
        'numero',
        'pessoafis',
        'pessoajur'
    ];
}
