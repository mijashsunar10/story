<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Storydetails>
 */
class StorydetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->title,
            'description' => $this->faker->paragraph(500),
            'main_characters' => $this->faker->name,
            'author' => $this->faker->name,
            'image' => $this->faker->imageUrl(640,480),
            // 'created_at' => $this->faker->dateTime(),
            'category_id' => Category::factory()->create()->id,
            'user_id' => User::factory()->create()->id,

            'audience' => $this->faker->randomElement(['child','young','adult']),
            'language' => $this->faker->languageCode,
            'copyright' => $this->faker->randomElement(['All_rights_reserved','Public_Domain']),
            // 'updated_at' => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),

            
        ];
    }
}
