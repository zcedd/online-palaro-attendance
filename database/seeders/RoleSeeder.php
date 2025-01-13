<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'view dashboard']);
//        Permission::create(['name' => 'delete articles']);
//        Permission::create(['name' => 'publish articles']);
//        Permission::create(['name' => 'unpublish articles']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'visitor']);
        $role1->givePermissionTo('view dashboard');
//        $role1->givePermissionTo('delete articles');
//
//        $role2 = Role::create(['name' => 'admin']);
//        $role2->givePermissionTo('publish articles');
//        $role2->givePermissionTo('unpublish articles');

        $role3 = Role::create(['name' => 'Super-Admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // create demo users
        $user = \App\Models\User::factory()->create([
            'name' => 'Lam-Ang',
            'email' => 'lam-ang@erwinmaximo.com',
            'password' =>  Hash::make('erwinmaximo')
        ]);
        $user->assignRole($role3);

//        $user = \App\Models\User::factory()->create([
//            'name' => 'Example Admin User',
//            'email' => 'admin@example.com',
//        ]);
//        $user->assignRole($role2);
//
//        $user = \App\Models\User::factory()->create([
//            'name' => 'Example Super-Admin User',
//            'email' => 'superadmin@example.com',
//        ]);
//        $user->assignRole($role3);
    }
}
