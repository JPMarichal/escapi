<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function capitulo()
    {
        return $this->belongsTo(Capitulos::class);
    }

    public function versiculos()
    {
        return $this->hasMany(Versiculos::class);
    }
}
