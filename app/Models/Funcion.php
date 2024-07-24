<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Funcion extends Model
{
    use HasFactory;
    protected $fillable = [
        'pelicula_id','sala_id','fecha'
    ];

    public function pelicula(): BelongsTo   
    {
        return $this->belongsTo(Pelicula::class);
    }

    public function sala(): BelongsTo   
    {
        return $this->belongsTo(Sala::class);
    }
}
