<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OpeningHourResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'dayOfWeek' => $this->day_of_week,
            'openingHour' => $this->opening_hour,
            'closingHour' => $this->closing_hour
        ];
    }
}
