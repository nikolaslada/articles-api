<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'authors_id' => factory('App\Author')->create()->id,
        'uid' => $faker->unique()->uuid,
        'title' => substr($faker->sentence(2), 0, -1),
        'status' => 'published',
        'content' => $faker->text,
    ];
});
