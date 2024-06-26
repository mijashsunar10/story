<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Storydetails;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StorydetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storydetails::query()->delete();
        Storydetails::factory()->count(100)->create();  
    }
}
