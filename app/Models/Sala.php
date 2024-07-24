<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sala extends Model
{
    use HasFactory;

    public function cine(): BelongsTo
    {
        return $this->belongsTo(Cine::class);
    }
    public function asiento(): HasMany
    {
        return $this->hasMany(Asiento::class);
    }
}
