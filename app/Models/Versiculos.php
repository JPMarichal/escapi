<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\Pericopas;
use App\Models\Capitulos;
use App\Models\Comentarios;

class Versiculos extends Model
{
    use HasFactory;

    protected $table = 'versiculos';

    protected $fillable = [
        'capitulo_id',
        'pericopa_id',
        'num_versiculo',
        'contenido',
        'referencia',
        'imagen',
        'pie_imagen',
        'video',
    ];

    public function pericopa(): BelongsTo
    {
        return $this->belongsTo(Pericopas::class, 'pericopa_id');
    }

    public function capitulo(): BelongsTo
    {
        return $this->belongsTo(Capitulos::class, 'capitulo_id');
    }

    /**
     * Obtiene los comentarios asociados al versículo.
     * Los comentarios se ordenan por el campo 'orden' si está definido.
     */
    public function comentarios(): MorphMany
    {
        return $this->morphMany(Comentarios::class, 'comentable')
                    ->orderBy('orden', 'asc');
    }
}
