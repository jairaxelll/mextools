<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RoleAndUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define roles
        $adminRole = Role::create(['name' => 'admin']);
        $customerRole = Role::create(['name' => 'customer']);

        // Create Admin User
        $admin = User::firstOrCreate(
            ['email' => 'admin@mextools.com'],
            [
                'name' => 'Admin MexTools',
                'password' => Hash::make('password'),
            ]
        );
        $admin->assignRole('admin');

        // Create a test Customer User
        $customer = User::firstOrCreate(
            ['email' => 'cliente@mextools.com'],
            [
                'name' => 'Cliente de Prueba',
                'password' => Hash::make('password'),
            ]
        );
        $customer->assignRole('customer');
    }
}
