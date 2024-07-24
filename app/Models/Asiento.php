<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asiento extends Model
{
    use HasFactory;

    protected $fillable = ['sala_id', 'descripcion'];

    public function sala()
    {
        return $this->belongsTo(Sala::class);
    }
}
