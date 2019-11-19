<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Champions;
use Faker\Generator as Faker;


$factory->define(Champions::class, function (Faker $faker) {
  
    $types = ['mage','bruiser','assassin','ad carry','tank'];
    $roles = ['top','jungler','mid','bot','support'];

    return [
        'name'=> $faker->name,
        'health_points'=> $faker->numberBetween(100,9999),
        'type'=> $types[$faker->numberBetween(0,4)],
        'role'=> $roles[$faker->numberBetween(0,4)],
    ];
});
