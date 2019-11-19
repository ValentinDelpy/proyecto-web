<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Items;
use Faker\Generator as Faker;


$factory->define(Items::class, function (Faker $faker) {

    return [
        'name'=> $faker->name,
        'cost'=> $faker->numberBetween(0,4000),
        'AD'=> $faker->numberBetween(0,100),
        'AP'=> $faker->numberBetween(0,150),
    ];
});
