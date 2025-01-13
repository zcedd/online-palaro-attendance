<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DelegationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $delegation = [
            ['name' => 'Bangsamoro Autonomous Region in Muslim Mindanao', 'delegation_type_id' => 1, 'venue_id' => 1],
            ['name' => 'Cordillera Administrative Region', 'delegation_type_id' => 1, 'venue_id' => 1],
            ['name' => 'National Capital Region', 'delegation_type_id' => 1, 'venue_id' => 1],
            ['name' => 'Cordillera Administrative Region', 'delegation_type_id' => 1, 'venue_id' => 1],
            ['name' => 'National Capital Region', 'delegation_type_id' => 1, 'venue_id' => 1],
            ['name' => 'Negros Island Region', 'delegation_type_id' => 1, 'venue_id' => 1],
            ['name' => 'Region I or Ilocos Region', 'delegation_type_id' => 1, 'venue_id' => 1],
            ['name' => 'Region II or Cagayan Valley', 'delegation_type_id' => 1, 'venue_id' => 1],
            ['name' => 'Region III or Central Luzon', 'delegation_type_id' => 1, 'venue_id' => 1],
            ['name' => 'Region IV-A or Southern Tagalog - Calabarzon', 'delegation_type_id' => 1, 'venue_id' => 1],
            ['name' => 'Region IV-B or Southern Tagalog - Mimaropa', 'delegation_type_id' => 1, 'venue_id' => 1],
            ['name' => 'Region V or Bicol Region', 'delegation_type_id' => 1, 'venue_id' => 1],
            ['name' => 'Region VI or Western Visayas', 'delegation_type_id' => 1, 'venue_id' => 1],
            ['name' => 'Region VII Central Visayas', 'delegation_type_id' => 1, 'venue_id' => 1],
            ['name' => 'Region VIII or Eastern Visayas', 'delegation_type_id' => 1, 'venue_id' => 1],
            ['name' => 'Region IX or Zamboanga Peninsula', 'delegation_type_id' => 1, 'venue_id' => 1],
            ['name' => 'Region X or Northern Mindanao', 'delegation_type_id' => 1, 'venue_id' => 1],
            ['name' => 'Region XI or Davao Region', 'delegation_type_id' => 1, 'venue_id' => 1],
            ['name' => 'Region XII or Soccsksargen', 'delegation_type_id' => 1, 'venue_id' => 1],
            ['name' => 'Region XIII or Caraga Region', 'delegation_type_id' => 1, 'venue_id' => 1],
            ['name' => 'National Academy of Sports', 'delegation_type_id' => 1, 'venue_id' => 1],
            ['name' => 'Philippine Schools Overseas', 'delegation_type_id' => 1, 'venue_id' => 1],
        ];

        DB::table('delegations')->insert($delegation);
    }
}
