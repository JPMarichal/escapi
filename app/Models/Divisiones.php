<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Volumenes;
use App\Models\Libros;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


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
    ];


    public function volumen(): BelongsTo
    {

        return $this->belongsTo(Volumenes::class);
    }

    public function libros()
    {
        return $this->hasMany(Libros::class);
    }
}
