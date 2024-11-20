<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Seeders\TagSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\PostSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\ImageSeeder;
use Database\Seeders\CommentSeeder;
use Database\Seeders\CategorySeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Llamamos a los seeders para que creen los datos manuales.
        $this->call(CategorySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(ImageSeeder::class);

        
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
