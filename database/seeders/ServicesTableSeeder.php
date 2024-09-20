<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'name' => 'Web Development',
            'description' => 'Comprehensive web development services',
            'price' => 1000.00,
        ]);

        Service::create([
            'name' => 'SEO Optimization',
            'description' => 'Improve your website\'s visibility',
            'price' => 500.00,
        ]);

        Service::factory()->count(5)->create();
    }
}
