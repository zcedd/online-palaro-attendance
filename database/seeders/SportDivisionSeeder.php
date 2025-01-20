<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SportDivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sportDivision = [
            ['name' => 'Primary'],
            ['name' => 'Secondary']
        ];

        DB::table('sport_divisions')->insert($sportDivision);
    }
}
