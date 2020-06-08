<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Recipe;
use Faker\Generator as Faker;

$factory->define(Recipe::class, function (Faker $faker) {
    return [
            'ownerId' => 1,
            'recipesNamn' => Str::random(10),
            'recipesIngred' => Str::random(50),
            'recipesBeskrivn' => Str::random(100),
            'recipesKategori' => 'Vegetarisk',
    ];
});
