<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Documento extends Model
{

    /**
     * Tabela de Documentos
     * @var string
     */
    protected $table = 'documentos';

    /**
     * ID de documento
     * @var string
     */
    protected $primaryKey = 'id';

    protected $fillable = [
        'tipo_arquivo',
        'descricao',
        'src',
        'data_modificado',
        'data_criacao',
        'pessoafis',
        'pessoajur',
    ];

    protected $guarded = [
        'xid',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function evento()
    {
        return $this->belongsToMany(Evento::class, 'vinculados', 'documento', 'evento');
    }

    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($produto){
            Storage::disk('local')->delete($produto->src);
        });
    }
}
