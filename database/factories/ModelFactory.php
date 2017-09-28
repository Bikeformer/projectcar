<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Motorist::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'surname' => $faker->lastName,
    ];
});

$factory->define(App\Car::class, function (Faker\Generator $faker) {
    $carMarkCount = \App\CarMark::count();

    return [
        'model' => rand(1, 99),
        'description' => $faker->text(50),
        'car_mark_id' => rand(1, $carMarkCount),
    ];
});
