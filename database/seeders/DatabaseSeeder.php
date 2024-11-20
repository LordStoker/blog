<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
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
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
