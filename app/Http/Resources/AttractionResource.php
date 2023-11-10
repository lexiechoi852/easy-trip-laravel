<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AttractionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'countryCode' => $this->country_code,
            'telephone' => $this->telephone,
            'url' => $this->url,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'placeId' => $this->place_id,
            'address' => $this->address,
            'city' => $this->city,
            'postalCode' => $this->postal_code,
            'image' => $this->image,
            'openingHours' => OpeningHourResource::collection($this->opening_hours)
        ];
    }
}
