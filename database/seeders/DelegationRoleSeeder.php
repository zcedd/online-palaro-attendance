<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DelegationRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'Delegation Head'],
            ['name' => 'Assistant Delegation Head'],
            ['name' => 'Coach'],
            ['name' => 'Athlete'],
            ['name' => 'Medical Team'],
        ];

        DB::table('delegation_roles')->insert($roles);
    }
}
