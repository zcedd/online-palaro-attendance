<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(VenueTypeSeeder::class);
        $this->call(VenueSeeder::class);
        $this->call(DelegationTypeSeeder::class);
        $this->call(DelegationSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(DelegationRoleSeeder::class);
        $this->call(SportDisciplineSeeder::class);
        $this->call(SportSeeder::class);
        $this->call(AttendanceTypeSeeder::class);
    }
}
