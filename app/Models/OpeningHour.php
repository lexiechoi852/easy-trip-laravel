<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OpeningHour extends Model
{
    use HasFactory;

    protected $fillable = [
        'day_of_week',
        'opening_hour',
        'closing_hour',
        'attraction_id'
    ];

    public function attraction(): BelongsTo
    {
        return $this->belongsTo(Attraction::class);
    }
}
