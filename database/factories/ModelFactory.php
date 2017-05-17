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
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'user_firstname' => $faker->name,
        'user_lastname' => $faker->name,
        'user_email' => $faker->unique()->safeEmail,
        'user_password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
