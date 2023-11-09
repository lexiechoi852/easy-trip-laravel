<?php

namespace Database\Seeders;

use App\Models\OpeningHour;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OpeningHourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OpeningHour::create([
            'day_of_week' => 0,
            'opening_hour' => null,
            'closing_hour' => null,
            'attraction_id' => 1
        ]);

        OpeningHour::create([
            'day_of_week' => 1,
            'opening_hour' => Carbon::create(null, null, null, 10, 00, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 17, 30, 0, 'America/Toronto'),
            'attraction_id' => 1
        ]);

        OpeningHour::create([
            'day_of_week' => 2,
            'opening_hour' => Carbon::create(null, null, null, 10, 00, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 17, 30, 0, 'America/Toronto'),
            'attraction_id' => 1
        ]);

        OpeningHour::create([
            'day_of_week' => 3,
            'opening_hour' => Carbon::create(null, null, null, 10, 00, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 17, 30, 0, 'America/Toronto'),
            'attraction_id' => 1
        ]);

        OpeningHour::create([
            'day_of_week' => 4,
            'opening_hour' => Carbon::create(null, null, null, 10, 00, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 17, 30, 0, 'America/Toronto'),
            'attraction_id' => 1
        ]);

        OpeningHour::create([
            'day_of_week' => 5,
            'opening_hour' => Carbon::create(null, null, null, 10, 00, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 17, 30, 0, 'America/Toronto'),
            'attraction_id' => 1
        ]);

        OpeningHour::create([
            'day_of_week' => 6,
            'opening_hour' => Carbon::create(null, null, null, 10, 00, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 17, 30, 0, 'America/Toronto'),
            'attraction_id' => 1
        ]);

        OpeningHour::create([
            'day_of_week' => 0,
            'opening_hour' => Carbon::create(null, null, null, 9, 30, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 21, 00, 0, 'America/Toronto'),
            'attraction_id' => 2
        ]);
        OpeningHour::create([
            'day_of_week' => 1,
            'opening_hour' => Carbon::create(null, null, null, 9, 30, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 21, 00, 0, 'America/Toronto'),
            'attraction_id' => 2
        ]);

        OpeningHour::create([
            'day_of_week' => 2,
            'opening_hour' => Carbon::create(null, null, null, 9, 30, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 21, 00, 0, 'America/Toronto'),
            'attraction_id' => 2
        ]);

        OpeningHour::create([
            'day_of_week' => 3,
            'opening_hour' => Carbon::create(null, null, null, 9, 30, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 21, 00, 0, 'America/Toronto'),
            'attraction_id' => 2
        ]);

        OpeningHour::create([
            'day_of_week' => 4,
            'opening_hour' => Carbon::create(null, null, null, 9, 30, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 21, 00, 0, 'America/Toronto'),
            'attraction_id' => 2
        ]);

        OpeningHour::create([
            'day_of_week' => 5,
            'opening_hour' => Carbon::create(null, null, null, 9, 30, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 21, 00, 0, 'America/Toronto'),
            'attraction_id' => 2
        ]);

        OpeningHour::create([
            'day_of_week' => 6,
            'opening_hour' => Carbon::create(null, null, null, 9, 30, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 21, 00, 0, 'America/Toronto'),
            'attraction_id' => 2
        ]);

        OpeningHour::create([
            'day_of_week' => 0,
            'opening_hour' => null,
            'closing_hour' => null,
            'attraction_id' => 3
        ]);

        OpeningHour::create([
            'day_of_week' => 1,
            'opening_hour' => Carbon::create(null, null, null, 9, 00, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 19, 00, 0, 'America/Toronto'),
            'attraction_id' => 3
        ]);

        OpeningHour::create([
            'day_of_week' => 2,
            'opening_hour' => Carbon::create(null, null, null, 9, 00, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 19, 00, 0, 'America/Toronto'),
            'attraction_id' => 3
        ]);

        OpeningHour::create([
            'day_of_week' => 3,
            'opening_hour' => Carbon::create(null, null, null, 9, 00, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 19, 00, 0, 'America/Toronto'),
            'attraction_id' => 3
        ]);

        OpeningHour::create([
            'day_of_week' => 4,
            'opening_hour' => Carbon::create(null, null, null, 9, 00, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 19, 00, 0, 'America/Toronto'),
            'attraction_id' => 3
        ]);

        OpeningHour::create([
            'day_of_week' => 5,
            'opening_hour' => Carbon::create(null, null, null, 7, 00, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 17, 00, 0, 'America/Toronto'),
            'attraction_id' => 3
        ]);

        OpeningHour::create([
            'day_of_week' => 6,
            'opening_hour' => Carbon::create(null, null, null, 10, 00, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 21, 00, 0, 'America/Toronto'),
            'attraction_id' => 3
        ]);

        OpeningHour::create([
            'day_of_week' => 0,
            'opening_hour' => Carbon::create(null, null, null, 9, 30, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 17, 00, 0, 'America/Toronto'),
            'attraction_id' => 4
        ]);

        OpeningHour::create([
            'day_of_week' => 1,
            'opening_hour' => Carbon::create(null, null, null, 9, 30, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 17, 00, 0, 'America/Toronto'),
            'attraction_id' => 4
        ]);

        OpeningHour::create([
            'day_of_week' => 2,
            'opening_hour' => Carbon::create(null, null, null, 9, 30, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 17, 00, 0, 'America/Toronto'),
            'attraction_id' => 4
        ]);

        OpeningHour::create([
            'day_of_week' => 3,
            'opening_hour' => Carbon::create(null, null, null, 9, 30, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 17, 00, 0, 'America/Toronto'),
            'attraction_id' => 4
        ]);

        OpeningHour::create([
            'day_of_week' => 4,
            'opening_hour' => Carbon::create(null, null, null, 9, 30, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 17, 00, 0, 'America/Toronto'),
            'attraction_id' => 4
        ]);

        OpeningHour::create([
            'day_of_week' => 5,
            'opening_hour' => Carbon::create(null, null, null, 9, 30, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 17, 00, 0, 'America/Toronto'),
            'attraction_id' => 4
        ]);

        OpeningHour::create([
            'day_of_week' => 6,
            'opening_hour' => Carbon::create(null, null, null, 9, 30, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 17, 00, 0, 'America/Toronto'),
            'attraction_id' => 4
        ]);

        OpeningHour::create([
            'day_of_week' => 0,
            'opening_hour' => null,
            'closing_hour' => null,
            'attraction_id' => 5
        ]);

        OpeningHour::create([
            'day_of_week' => 1,
            'opening_hour' => Carbon::create(null, null, null, 10, 30, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 17, 00, 0, 'America/Toronto'),
            'attraction_id' => 5
        ]);

        OpeningHour::create([
            'day_of_week' => 2,
            'opening_hour' => Carbon::create(null, null, null, 10, 30, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 21, 00, 0, 'America/Toronto'),
            'attraction_id' => 5
        ]);

        OpeningHour::create([
            'day_of_week' => 3,
            'opening_hour' => Carbon::create(null, null, null, 10, 30, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 17, 00, 0, 'America/Toronto'),
            'attraction_id' => 5
        ]);

        OpeningHour::create([
            'day_of_week' => 4,
            'opening_hour' => Carbon::create(null, null, null, 10, 30, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 21, 00, 0, 'America/Toronto'),
            'attraction_id' => 5
        ]);

        OpeningHour::create([
            'day_of_week' => 5,
            'opening_hour' => Carbon::create(null, null, null, 10, 30, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 17, 30, 0, 'America/Toronto'),
            'attraction_id' => 5
        ]);

        OpeningHour::create([
            'day_of_week' => 6,
            'opening_hour' => Carbon::create(null, null, null, 10, 30, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 17, 30, 0, 'America/Toronto'),
            'attraction_id' => 5
        ]);

        OpeningHour::create([
            'day_of_week' => 0,
            'opening_hour' => Carbon::create(null, null, null, 9, 00, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 23, 00, 0, 'America/Toronto'),
            'attraction_id' => 6
        ]);

        OpeningHour::create([
            'day_of_week' => 1,
            'opening_hour' => Carbon::create(null, null, null, 9, 00, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 23, 00, 0, 'America/Toronto'),
            'attraction_id' => 6
        ]);

        OpeningHour::create([
            'day_of_week' => 2,
            'opening_hour' => Carbon::create(null, null, null, 9, 00, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 23, 00, 0, 'America/Toronto'),
            'attraction_id' => 6
        ]);

        OpeningHour::create([
            'day_of_week' => 3,
            'opening_hour' => Carbon::create(null, null, null, 9, 00, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 23, 00, 0, 'America/Toronto'),
            'attraction_id' => 6
        ]);

        OpeningHour::create([
            'day_of_week' => 4,
            'opening_hour' => Carbon::create(null, null, null, 9, 00, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 23, 00, 0, 'America/Toronto'),
            'attraction_id' => 6
        ]);

        OpeningHour::create([
            'day_of_week' => 5,
            'opening_hour' => Carbon::create(null, null, null, 9, 00, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 23, 00, 0, 'America/Toronto'),
            'attraction_id' => 6
        ]);

        OpeningHour::create([
            'day_of_week' => 6,
            'opening_hour' => Carbon::create(null, null, null, 9, 00, 0, 'America/Toronto'),
            'closing_hour' => Carbon::create(null, null, null, 23, 00, 0, 'America/Toronto'),
            'attraction_id' => 6
        ]);
    }
}
