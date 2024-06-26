<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Storywriting>
 */
class StorywritingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image'=>$this->faker->imageUrl(240,280),
            'title'=>$this->faker->title,
            'description'=>$this->faker->paragraph(2000),
            'slug'=>$this->faker->slug,
            'user_id'=>User::factory()->create()->id,
        ];
    }
}
