<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    ];

    public function libros()
    {
        return $this->hasMany(Libros::class, 'volumen_id');
    }

    public function divisiones()
    {
        return $this->hasMany(Divisiones::class, 'volumen_id');
    }
}
