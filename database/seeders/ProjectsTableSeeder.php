<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a project for the admin user (assuming ID 1)
        Project::create([
            'user_id' => 1,
            'title' => 'First Project',
            'description' => 'Description of the first project',
            'status' => 'active',
        ]);

        // Use the factory to create additional projects
        Project::factory()->count(5)->create();
    }
}
