<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sala extends Model
{
    use HasFactory;

    public function cine(): BelongsTo
    {
        return $this->belongsTo(Cine::class);
    }
}
