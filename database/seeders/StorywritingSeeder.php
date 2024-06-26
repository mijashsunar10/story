<?php

namespace Database\Seeders;

use App\Models\Storywriting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StorywritingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storywriting::query()->delete();
        Storywriting::factory()->count(50)->create();
    }
}
