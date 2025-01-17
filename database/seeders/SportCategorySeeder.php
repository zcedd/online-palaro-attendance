<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SportCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sportCategory = [
            ['name' => 'Primary'],
            ['name' => 'Secondary']
        ];

        DB::table('sport_categories')->insert($sportCategory);
    }
}
