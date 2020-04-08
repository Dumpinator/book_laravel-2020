<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'description' => $faker->paragraph(), // pas de s à paragraph si "s" c'est un tableau dans Faker
        'published_at' => $faker->dateTime(),
        'status' => $faker->randomElement(['published', 'unpublished'])
    ];
});
