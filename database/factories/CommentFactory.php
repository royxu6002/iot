<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comment;
use App\Models\Blog;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
     $blog_id = Blog::pluck('id')->toArray();
     $user_id = User::pluck('id')->toArray();
     $time = \Illuminate\Support\Carbon::now()->toDateTimeString();

    return [
        'user_id' => $faker->randomElement($user_id),
        'blog_id' => $faker->randomElement($blog_id),
        'content' => $faker->paragraph(),
        'parent_id' => 0,
        'created_at' => $time,
        'updated_at' => $time,

    ];
});
