<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserDetails>
 */
class UserDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'phone'=>$this->faker->phoneNumber(10),
            'address'=>$this->faker->address,
            'gender'=>$this->faker->randomElement(['male','female','other']),
            'user_id'=>User::all()->random()->id,
        ];
    }
}
