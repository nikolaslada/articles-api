<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'uid' => $faker->unique()->uuid,
        'title' => substr($faker->sentence(3), 0, -1),
        'status' => 'category',
    ];
});
