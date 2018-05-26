<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Alumno::class, function (Faker $faker) {
    return [
        'nombres' => $faker->name,
        'apellido' => $faker->name,
        'dni' => mt_rand(10000000, 99999999) ,
        'edad' => random_int(13,20),
    ];
});