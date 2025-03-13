<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

use App\Models\Volumenes;
use App\Models\Divisiones;
use App\Models\Capitulos;
use App\Models\Comentarios;

class Libros extends Model
{
    use HasFactory;

    protected $table = 'libros';

    protected $fillable = [
        'title',
        'description',
        'featured_image',
        'keywords',
        'volumen_id',
        'division_id',
        'nombre',
        'abreviatura',
        'abreviatura_online',
        'num_capitulos',
        'palabra_clave',
        'concepto_principal',
        'autor',
        'autor_why',
        'f_redaccion',
        'fecha_redaccion_why',
        'descripcion',
        'introduccion',
        'temas_estructura',
        'sumario',
        'url',
    ];

    public function volumen(): BelongsTo
    {
        return $this->belongsTo(Volumenes::class, 'volumen_id');
    }

    public function division(): BelongsTo
    {
        return $this->belongsTo(Divisiones::class, 'division_id');
    }

    public function capitulos(): HasMany
    {
        return $this->hasMany(Capitulos::class, 'libro_id');
    }

    /**
     * Obtiene los comentarios asociados al libro.
     * Los comentarios se ordenan por el campo 'orden' si está definido.
     */
    public function comentarios(): MorphMany
    {
        return $this->morphMany(Comentarios::class, 'comentable')
                    ->orderBy('orden');
    }
}
