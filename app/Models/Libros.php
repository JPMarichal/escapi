<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Volumenes;
use App\Models\Divisiones;
use App\Models\Partes;
use App\Models\Capitulos;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


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
        return $this->belongsTo(Volumenes::class);
    }

    public function division(): BelongsTo
    {
        return $this->belongsTo(Divisiones::class);
    }

    public function partes(): HasMany
    {
        return $this->hasMany(Partes::class);
    }

    public function capitulos(): HasMany
    {
        return $this->hasMany(Capitulos::class);
    }

}
