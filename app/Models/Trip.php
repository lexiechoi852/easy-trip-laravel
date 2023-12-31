<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'city',
        'start_date',
        'end_date',
        'user_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function trip_items(): HasMany
    {
        return $this->hasMany(TripItem::class);
    }

    public function schedule_items(): HasMany
    {
        return $this->hasMany(ScheduleItem::class);
    }
}
