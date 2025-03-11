<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Libros;
use App\Models\Partes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


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
        'estado_publicacion',
    ];


    public function libro(): BelongsTo
    {
        return $this->belongsTo(Libros::class);
    }

    public function parte(): BelongsTo
    {
        return $this->belongsTo(Partes::class);
    }

    public function pericopas(): HasMany
    {
        return $this->hasMany(Pericopas::class);
    }

    public function versiculos(): HasMany
    {
        return $this->hasMany(Versiculos::class);
    }



    
   
}
