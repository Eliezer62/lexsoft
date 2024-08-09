<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $primaryKey = 'id';

    protected $table = 'telefones';

    protected $fillable = [
        'ddi',
        'ddd',
        'numero',
        'pessoafis',
        'pessoajur'
    ];

    protected $guarded = [
        'xid'
    ];

    public $timestamps = false;
}
