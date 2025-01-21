<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sports = [
            [
                'name' => 'Dancesport',
                'sport_discipline_id' => 1,
                'venue_id' => 1,
            ],
            [
                'name' => 'Pencak Silat',
                'sport_discipline_id' => 1,
                'venue_id' => 1,
            ],
            [
                'name' => 'Weightlifting',
                'sport_discipline_id' => 2,
                'venue_id' => 1,
            ],
            [
                'name' => 'Archery',
                'sport_discipline_id' => 4,
                'venue_id' => 1,
            ],
            [
                'name' => 'Arnis',
                'sport_discipline_id' => 4,
                'venue_id' => 1,
            ],
            [
                'name' => 'Athletics',
                'sport_discipline_id' => 4,
                'venue_id' => 1,
            ],
            [
                'name' => 'Badminton',
                'sport_discipline_id' => 4,
                'venue_id' => 1,
            ],
            [
                'name' => 'Baseball',
                'sport_discipline_id' => 4,
                'venue_id' => 1,
            ],
            [
                'name' => 'Basketball',
                'sport_discipline_id' => 4,
                'venue_id' => 1,
            ],
            [
                'name' => 'Billiards',
                'sport_discipline_id' => 4,
                'venue_id' => 1,
            ],
            [
                'name' => 'Boxing',
                'sport_discipline_id' => 4,
                'venue_id' => 1,
            ],
            [
                'name' => 'Chess',
                'sport_discipline_id' => 4,
                'venue_id' => 1,
            ],
            [
                'name' => 'Football',
                'sport_discipline_id' => 4,
                'venue_id' => 1,
            ],
            [
                'name' => 'Futsal',
                'sport_discipline_id' => 4,
                'venue_id' => 1,
            ],
            [
                'name' => 'Gymnastics',
                'sport_discipline_id' => 4,
                'venue_id' => 1,
            ],
            [
                'name' => 'Sepak Takraw',
                'sport_discipline_id' => 4,
                'venue_id' => 1,
            ],
            [
                'name' => 'Softball',
                'sport_discipline_id' => 4,
                'venue_id' => 1,
            ],
            [
                'name' => 'swimming',
                'sport_discipline_id' => 4,
                'venue_id' => 1,
            ],
            [
                'name' => 'Table Tennis',
                'sport_discipline_id' => 4,
                'venue_id' => 1,
            ],
            [
                'name' => 'Taekwondo',
                'sport_discipline_id' => 4,
                'venue_id' => 1,
            ],
            [
                'name' => 'Tennis',
                'sport_discipline_id' => 4,
                'venue_id' => 1,
            ],
            [
                'name' => 'Volleyball',
                'sport_discipline_id' => 4,
                'venue_id' => 1,
            ],
            [
                'name' => 'wrestling',
                'sport_discipline_id' => 4,
                'venue_id' => 1,
            ],
            [
                'name' => 'Wushu',
                'sport_discipline_id' => 4,
                'venue_id' => 1,
            ]
        ];

        DB::table('sports')->insert($sports);
    }
}
