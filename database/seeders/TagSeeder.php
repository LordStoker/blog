<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tag = new Tag();
        $tag->name = "etiqueta1";
        $tag->url_clean = "etiqueta_1";
        $tag->save();

        $tag2 = new Tag();
        $tag2->name = "etiqueta2";
        $tag2->url_clean = "etiqueta_2";
        $tag2->save();

        $tag3 = new Tag();
        $tag3->name = "etiqueta3";
        $tag3->url_clean = "etiqueta_3";
        $tag3->save();

        $tag4 = new Tag();
        $tag4->name = "etiqueta4";
        $tag4->url_clean = "etiqueta_4";
        $tag4->save();
        
        $tag5 = new Tag();
        $tag5->name = "etiqueta5";
        $tag5->url_clean = "etiqueta_5";
        $tag5->save();

        // $jsonData = file_get_contents("C:\\temp\\baleart\\tags.json");
        // $tags = json_decode($jsonData, true);
        // if ($jsonData === false || $tags === null) {
        //     throw new \Exception("Error al leer o procesar el JSON.");
        // }

        // foreach ($tags['tags']['tag'] as $tag) {
        //     if (isset($tag['Nom'], $tag['url'])) {
        //         Tag::create([
        //             'name' => $tag['Nom'],
        //             'url_clean' => $tag['url'],
        //         ]);
        //     }
        // }
    }
}
