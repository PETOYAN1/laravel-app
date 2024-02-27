<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Like>
 */
class LikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => random_int(DB::table('categories')->min('id'), DB::table('categories')->max('id')),
            'post_id' => random_int(DB::table('posts')->min('id'), DB::table('posts')->max('id')),
            'is_like' => User::IS_BLOCKED[rand(0,1)]
        ];
    }
}
