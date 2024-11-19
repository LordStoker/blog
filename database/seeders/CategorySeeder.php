<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $category = new Category();
        // $category->title = "Noves tecnologies";
        // $category->url_clean = "noves_tecnologies";
        // $category->save();

        $jsonData = file_get_contents("C:\\temp\\baleart\\categories.json");
        $categories = json_decode($jsonData, true);

        foreach ($categories['categories']['category'] as $category) {
            Category::create([
                'title' => $category['Nom'],
                'url_clean' => $category['url'],
            ]);
        }
    }
}
