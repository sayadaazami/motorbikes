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
$factory->define(Motor\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Motor\MotorBike::class, function (Faker\Generator $faker) {
    return [
        'cc' => $faker->numberBetween(2, 6) * 50,
        'color' => $faker->colorName,
        'weight' => $faker->numberBetween(0, 5) * 25 + 100,
        'price' => $faker->numberBetween(9000000, 200000000),
        'image' => $faker->image(storage_path('app/public/motorbikes')),
    ];
});