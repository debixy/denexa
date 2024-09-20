<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use Carbon\Carbon;


class RolesTableSeeder extends Seeder
{
    public function run()
    {
        Role::firstOrCreate(
            ['name' => 'admin'],
            [
                'display_name' => 'Administrator',
                'description'  => 'User with full access to the application',
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ]
        );


        Role::firstOrCreate(
            ['name' => 'admin'],
            [
                'display_name' => 'Administrator',
                'description'  => 'User with full access to the application',
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ]
        );
    }
}
