<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Create the admin user
        $adminUser = User::create([
            'username' => 'admin',
            'first_name' => 'Admin',
            'last_name' => 'User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // Use a secure password in production
            'phone' => '1234567890',
            'two_factor_enabled' => false,
            'address' => '123 Admin St, Admin City',
            'avatar' => 'path/to/avatar.jpg',
            'birthday' => '1990-01-01',
            'country_id' => 1, // Assuming a country exists with ID 1
            'last_login' => now(),
        ]);

        // Assign the admin role to the admin user
        $adminRole = Role::where('name', 'admin')->first();
        $adminUser->roles()->attach($adminRole);

        // Create 10 regular users and assign the 'user' role to each
        $regularUsers = User::factory()->count(10)->create();

        $userRole = Role::where('name', 'user')->first();

        foreach ($regularUsers as $user) {
            $user->roles()->attach($userRole);
        }
    }
}
