<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comment;
use App\Models\Follow;
use App\Models\Category;
use App\Models\Like;
use App\Models\User;
use App\Models\Post;
use App\Models\Rate;
use App\Models\View;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::factory(5)->create();
        User::factory(5)->create();
        Post::factory(5)->create();
        Like::factory(5)->create();
        Rate::factory(5)->create();
        View::factory(5)->create();
        Follow::factory(5)->create();
        Comment::factory(5)->create();

    }
}
