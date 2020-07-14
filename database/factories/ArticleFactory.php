<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'body' => $faker->paragraph(6, true),
        'desc' => $faker->sentence(12, true),
    ];
});
