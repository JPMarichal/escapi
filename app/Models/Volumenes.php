<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

use App\Models\Divisiones;
use App\Models\Comentarios;

class Volumenes extends Model
{
    use HasFactory;

    protected $table = 'volumenes';

    protected $fillable = [
        'title',
        'description',
        'featured_image',
        'keywords',
        'nombre',
        'abreviatura',
        'orden',
        'descripcion',
        'introduccion',
    ];

    public function libros()
    {
        return $this->hasMany(Libros::class, 'volumen_id');
    }

    public function divisiones(): HasMany
    {
        return $this->hasMany(Divisiones::class, 'volumen_id');
    }

    /**
     * Obtiene los comentarios asociados al volumen.
     * Los comentarios se ordenan por el campo 'orden' si está definido.
     */
    public function comentarios(): MorphMany
    {
        return $this->morphMany(Comentarios::class, 'comentable')
                    ->orderBy('orden');
    }
}
