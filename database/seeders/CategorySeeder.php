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
        if ($jsonData === false || $categories === null) {
            throw new \Exception("Error al leer o procesar el JSON.");
        }

        foreach ($categories['categories']['category'] as $category) {
            if(isset($category['Nom'], $category['url'])) {
                Category::create([
                    'title' => $category['Nom'],
                    'url_clean' => $category['url'],
                ]);
            }

        }
    }
}
