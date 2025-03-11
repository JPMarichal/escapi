<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Capitulos;
use App\Models\Versiculos;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pericopas extends Model
{
    use HasFactory;

    protected $table = 'pericopas';

    protected $fillable = [
        'title',
        'description',
        'featured_image',
        'keywords',
        'capitulo_id',
        'titulo',
        'versiculo_inicial',
        'versiculo_final',
        'descripcion',
    ];

    public function capitulo(): BelongsTo
    {
        return $this->belongsTo(Capitulos::class, 'capitulo_id');
    }

    public function versiculos(): HasMany
    {
        return $this->hasMany(Versiculos::class, 'pericopa_id');
    }
}
