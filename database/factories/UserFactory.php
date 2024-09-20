<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'username' => $this->faker->unique()->userName,
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'),
            'phone' => $this->faker->phoneNumber,
            'two_factor_enabled' => $this->faker->boolean,
            'address' => $this->faker->address,
            'avatar' => $this->faker->imageUrl(640, 480, 'people'),
            'birthday' => $this->faker->date(),
            'country_id' => \App\Models\Country::factory(),
            'role' => 'user',
            'last_login' => now(),
        ];
    }
}
