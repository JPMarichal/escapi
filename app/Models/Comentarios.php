<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Comentarios extends Model
{

    protected $table = 'comentarios';

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
    public function comentable(): MorphTo
    {
        return $this->morphTo();
    }

}
