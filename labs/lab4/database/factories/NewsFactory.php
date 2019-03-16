<?php

use Faker\Generator as Faker;

$factory->define(App\News::class, function (Faker $faker) {
    return [
        'title' => substr($faker->sentence(2), 0, -1),
        'slug' => $faker->domainWord,
        'description' => $faker->paragraph,
        'content' => $faker->paragraph(5),
    ];
});
