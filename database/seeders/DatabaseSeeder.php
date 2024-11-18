<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //Seeder
        $this->call(UserSeeder::class);

        User::factory(5)->create(); //Crea 5 usuarios
        Category::factory(5)->create(); //Crea 5 categorías 
        $posts = Post::factory(20)->create(); //Crea 20 posts
        $tags = Tag::factory(10)->create(); //Crea 10 tags

    }
}
