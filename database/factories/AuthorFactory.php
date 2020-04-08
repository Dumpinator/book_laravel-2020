<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Author;
// Faker alias pour le Generator 
use Faker\Generator as Faker;
// Configuration de la factory Faker pour le mettre en FR (voir plus bas)
use Faker\Factory as Factory;

// Une usine à fabriquer des auteurs
$factory->define(Author::class, function (Faker $faker) {

    // alias pour configurer en français
    $faker =  Factory::create('fr_FR');

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber, 
        'address' => $faker->address
    ];
});
