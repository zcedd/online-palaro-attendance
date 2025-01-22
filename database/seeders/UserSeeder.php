<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'first_name' => 'Zced Rick',
                'last_name' => 'table',
                'delegation_id' => 1,
                'email' => 'zcedbuduan@gmail.com',
                'password' => Hash::make('zcedzced'),
            ],
            [
                'first_name' => 'Erwin',
                'last_name' => 'Maximo',
                'delegation_id' => 1,
                'email' => 'maximoerwin2015@gmail.com',
                'password' => Hash::make('erwinmaximo'),
            ]
        ];

        User::insert($users);
    }
}
