<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

use App\Models\Libros;
use App\Models\Pericopas;
use App\Models\Versiculos;
use App\Models\Comentarios;

class Capitulos extends Model
{
    use HasFactory;

    protected $table = 'capitulos';

    protected $fillable = [
        'title',
        'description',
        'featured_image',
        'keywords',
        'libro_id',
        'parte_id',
        'num_capitulo',
        'referencia',
        'abreviatura',
        'num_versiculos',
        'titulo_capitulo',
        'url_oficial',
        'url_audio',
        'id_periodo',
        'sumario',
        'resumen',
        'ajuste_pericopas',
        'secuencia',
        'url_bc',
        'url_bcdev',
        'introduccion',
        'conclusion',
        'estado_publicacion'
    ];

    public function libro(): BelongsTo
    {
        return $this->belongsTo(Libros::class, 'libro_id');
    }

    public function pericopas(): HasMany
    {
        return $this->hasMany(Pericopas::class, 'capitulo_id')
                    ->orderBy('versiculo_inicial');
    }

    public function versiculos(): HasMany
    {
        return $this->hasMany(Versiculos::class, 'capitulo_id')
                    ->orderBy('num_versiculo');
    }

    /**
     * Obtiene los comentarios asociados al capítulo.
     * Los comentarios se ordenan por el campo 'orden' si está definido.
     */
    public function comentarios(): MorphMany
    {
        return $this->morphMany(Comentarios::class, 'comentable')
                    ->orderBy('orden');
    }
}
