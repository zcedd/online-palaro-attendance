<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SportDisciplineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sportDiscipline = [
            ['name' => 'Demonstration Sport'],
            ['name' => 'Exhibition Sport'],
            ['name' => 'Parasport'],
            ['name' => 'Regular Sport'],
        ];

        DB::table('sport_disciplines')->insert($sportDiscipline);
    }
}
