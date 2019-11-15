<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\OauthUser;
use Faker\Generator as Faker;

$factory->define(OauthUser::class, function (Faker $faker) {
    $types = ['github', 'linkedin', 'twitter', 'facebook'];

    return [
        'provider_type' => $faker->randomElement($types),
        'provider_id' => $faker->numberBetween(10000, 99999),
        'email' => $faker->unique()->safeEmail(),
        'name' => $faker->userName(),
        'avatar' => $faker->imageUrl(),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];

});
