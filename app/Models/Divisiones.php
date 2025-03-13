<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

use App\Models\Volumenes;
use App\Models\Libros;
use App\Models\Comentarios;

class Divisiones extends Model
{
    use HasFactory;

    protected $table = 'divisiones';

    protected $fillable = [
        'title',
        'description',
        'featured_image',
        'keywords',
        'volumen_id',
        'nombre',
        'orden',
        'descripcion',
        'introduccion',
    ];

    public function volumen(): BelongsTo
    {
        return $this->belongsTo(Volumenes::class, 'volumen_id');
    }

    public function libros(): HasMany
    {
        return $this->hasMany(Libros::class, 'division_id');
    }

    /**
     * Obtiene los comentarios asociados a la división.
     * Los comentarios se ordenan por el campo 'orden' si está definido.
     */
    public function comentarios(): MorphMany
    {
        return $this->morphMany(Comentarios::class, 'comentable')
                    ->orderBy('orden');
    }
}
