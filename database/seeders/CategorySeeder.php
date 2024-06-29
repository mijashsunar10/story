<?php

namespace Database\Seeders;
use App\Models\Category;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Process\FakeProcessResult;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            $categories = [

                ['name'=>'Science Fiction', 'slug'=>'science-fiction', 'description'=>'A genre of speculative fiction.'],
                ['name' => 'Comedy', 'slug' => 'comedy', 'description' => 'A genre of film that emphasizes humor.'],
                ['name' => 'Horror', 'slug' => 'horror', 'description' => 'A genre intended to scare.'],
                ['name' => 'Love', 'slug' => 'love', 'description' => 'A genre centered on romantic love.'],
                ['name' => 'Fantasy', 'slug' => 'fantasy', 'description' => 'A genre of speculative fiction.'],
                ['name' => 'Mystery', 'slug' => 'mystery', 'description' => 'A genre involving solving a mystery.'],
                ['name' => 'Mythology', 'slug' => 'mythology', 'description' => 'A collection of myths.'],
                ['name' => 'Legend', 'slug' => 'legend', 'description' => 'A genre involving legendary tales.'],
                ['name' => 'Fairy Tale', 'slug' => 'fairy-tale', 'description' => 'A genre involving magical stories.'],
                ['name' => 'Historical', 'slug' => 'historical', 'description' => 'A genre involving historical events.'],
                ['name' => 'Drama', 'slug' => 'drama', 'description' => 'A genre involving emotional narratives.'],
                ['name' => 'Fable', 'slug' => 'fable', 'description' => 'A genre involving moral tales.'],
            ];
    
            foreach ($categories as $category) {
                Category::create($category);
            }
        }
    

    }
}
