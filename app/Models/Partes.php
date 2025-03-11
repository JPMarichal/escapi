<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Libros;
use App\Models\Capitulos;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Partes extends Model
{
    use HasFactory;

    protected $table = 'partes';

    protected $fillable = [
        'title',
        'description',
        'featured_image',
        'keywords',
        'libro_id',
        'nombre',
        'sumario',
        'descripcion',
        'orden',
    ];


    public function libro(): BelongsTo
    {
        return $this->belongsTo(Libros::class);
    }

    public function capitulos(): HasMany
    {
        return $this->hasMany(Capitulos::class);

    }
}
