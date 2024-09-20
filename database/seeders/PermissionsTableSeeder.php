<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'name' => 'create_projects',
                'display_name' => 'Create Projects',
                'description' => 'Allows the user to create new projects',
            ],
            [
                'name' => 'edit_projects',
                'display_name' => 'Edit Projects',
                'description' => 'Allows the user to edit existing projects',
            ],
            [
                'name' => 'delete_projects',
                'display_name' => 'Edit Projects',
                'description' => 'Allows the user to delete projects',
            ],
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(
                ['name' => $permission['name']],
                [
                    'display_name' => $permission['display_name'],
                    'description' => $permission['description'],
                ]
            );
        }
    }
}
