<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Process\FakeProcessResult;
use App\Models\Category;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Category::class;
    public function definition(): array
    {


        $name = $this->faker->unique()->word;
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->sentence,
        ];
        // return [
        //     // 'name'=>ucfirst('$name'),
        //     // 'description'=>$this->faker->sentence,
        //     // 'slug'=>Str::slug('$name'),

        //     'name' => $this->faker->word,
        //     'slug' => $this->faker->slug,
        //     'description' => $this->faker->sentence,
        // ];
    }
}
