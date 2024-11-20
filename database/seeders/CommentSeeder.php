<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $comment1 = new Comment();
        $comment1->comment = 'Test comment1';
        $comment1->post_id = Post::inRandomOrder()->first()->id;
        $comment1->user_id = User::inRandomOrder()->first()->id;
        $comment1->save();

        $comment2 = new Comment();
        $comment2->comment = 'Test comment2';
        $comment2->post_id = Post::inRandomOrder()->first()->id;
        $comment2->user_id = User::inRandomOrder()->first()->id;
        $comment2->save();

        $comment3 = new Comment();
        $comment3->comment = 'Test comment3';
        $comment3->post_id = Post::inRandomOrder()->first()->id;
        $comment3->user_id = User::inRandomOrder()->first()->id;
        $comment3->save();

        //En caso de hacer los comments usaremos Factories
        //Son campos ficticios y no iniciales
        
    }
}
