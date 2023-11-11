<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TripItem extends Model
{
    use HasFactory;

    protected $casts = [ 'overlap' => 'boolean' ];
    
    public function trip(): BelongsTo
    {
        return $this->belongsTo(Trip::class);
    }

    public function attraction(): BelongsTo
    {
        return $this->belongsTo(Attraction::class);
    }
}
