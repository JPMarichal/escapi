<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    protected $fillable = [
        'titulo',
        'comentario',
        'orden',
        'url_imagen',
        'url_video'
    ];

    /**
     * Obtiene el modelo comentable (el modelo al que pertenece este comentario).
     */
    public function comentable()
    {
        return $this->morphTo();
    }
}
