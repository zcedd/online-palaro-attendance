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
            ['name' => 'Elementary'],
            ['name' => 'Secondary'],
            ['name' => 'Special Categories (PWD athletes)'],
        ];

        DB::table('sport_divisions')->insert($sportDivision);
    }
}
