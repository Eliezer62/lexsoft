<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comarca extends Model
{
    protected $table = 'comarcas';

    /**
     * Primary key
     * @var string
     */
    protected $primaryKey = 'id';

    protected $fillable = [
        'nome',
        'tribunal'
    ];

    public $timestamps = false;

    public function tribunal()
    {
        return $this->belongsTo(Tribunal::class, 'tribunal');
    }
}
