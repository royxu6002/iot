<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Faq;
use Faker\Generator as Faker;

$factory->define(Faq::class, function (Faker $faker) {
    return [
        'ask' => $faker->sentence,
        'answer' => $faker->paragraph,
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime()
    ];
});
