<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Pericopas;
use Illuminate\Database\Eloquent\Relations\HasMany;

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


    public function pericopa()
    {
        return $this->belongsTo(Pericopas::class);
    }

    public function capitulo()
    {
        return $this->belongsTo(Capitulos::class);
    }

    // public function versiculos_comentarios(): HasMany
    // {
    //     return $this->hasMany(VersiculosComentarios::class);
    // }
}
