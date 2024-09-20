<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            [
                'name' => 'Nigeria',
                'code' => 'NG',
            ],
            [
                'name' => 'United States',
                'code' => 'US',
            ],
            // Add other countries as needed...
        ];

        foreach ($countries as $country) {
            Country::firstOrCreate(
                ['name' => $country['name']], // Check for existing name
                ['code' => $country['code']] // Create or update the code
            );
        }
    }
}
