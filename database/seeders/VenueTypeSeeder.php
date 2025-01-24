<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VenueTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $venueType = [
            ['name' => 'Billeting venue'],
            ['name' => 'Competition venue'],
            ['name' => 'Accommodation'],
        ];

        DB::table('venue_types')->insert($venueType);
    }
}
