<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo', 'sinopsis', 'director', 'duracion', 'fecha_estreno', 'codigo_api', 'poster_path_api', 'wallpaper_path_api', 'trailer_path_api'
    ];
}
