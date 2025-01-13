<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttendanceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $type = [
            ['name' => 'Online'],
            ['name' => 'Offline'],
            ['name' => 'Self'],
        ];

        DB::table('attendance_types')->insert($type);
    }
}
