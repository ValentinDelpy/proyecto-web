<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Champions;
use Faker\Generator as Faker;

$factory->define(Champions::class, function (Faker $faker) {
    return [
        'name'->$faker->name,
        'health_points'->$faker->numberBetween(100,9999),
        'type'->$faker->Str::random(10),
        'role'->$faker->Str::random(10),
    ];
});
