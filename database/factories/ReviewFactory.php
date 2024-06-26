<?php

namespace Database\Factories;

use App\Models\Storywriting;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'comment' => $this->faker->realText(),
            'ratings'=>$this->faker->numberBetween(0,5),
            'user_id'=>User::factory()->create()->id,
            'story_id'=>Storywriting::all()->random()->id,
        ];
    }
}
