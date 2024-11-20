<?php

namespace Database\Seeders;

use App\Models\post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = new post();
        $post->title = 'Test post';
        $post->url_clean = 'test_post';
        $post->content = 'content';
        $post->posted = 'yes';
        $post->image = 'image1';
        $post->category_id = 1;
        $post->user_id = 1;
        $post->save();

        $post2 = new post();
        $post2->title = 'Test post2';
        $post2->url_clean = 'test_post2';
        $post2->content = 'content2';
        $post2->posted = 'not';
        $post2->image = 'image2';
        $post2->category_id = 2; // No permitirá darle un id que no exista en Category
        $post2->user_id = 1;
        $post2->save();

    }
}
