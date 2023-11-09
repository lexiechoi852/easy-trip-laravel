<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Attraction extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'country_code',
        'telephone',
        'url',
        'latitude',
        'longitude',
        'place_id',
        'address',
        'city',
        'postal_code',
        'image'
    ];

    public function opening_hours(): HasMany
    {
        return $this->hasMany(OpeningHour::class);
    }
}
