<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => RoleEnum::SUPER_ADMIN]);
        $role2 = Role::create(['name' => RoleEnum::ADMIN]);

        // create demo users
        $user = User::factory()->create([
            'name'       => 'Sercan Sever',
            'email'      => 'sercan.sever35@gmail.com',
            'password'   => Hash::make(passwordGeneration('123456'))
        ]);
        $user->assignRole($role1);

        $user2 = User::factory()->create([
            'name'       => 'Deneme 1',
            'email'      => 'deneme1@gmail.com',
            'password'   => Hash::make(passwordGeneration('123456'))
        ]);
        $user2->assignRole($role2);

        $user3 = User::factory()->create([
            'name'       => 'Deneme 2',
            'email'      => 'deneme2@gmail.com',
            'password'   => Hash::make(passwordGeneration('123456'))
        ]);
        $user3->assignRole($role2);
    }
}
