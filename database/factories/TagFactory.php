<?php

use Faker\Generator as Faker;

$factory->define(App\Tag::class, function (Faker $faker) {
    return [
        'uid' => $faker->unique()->uuid,
        'title' => substr($faker->sentence(3), 0, -1),
        'status' => 'tag',
    ];
});
