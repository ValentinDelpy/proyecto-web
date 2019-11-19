<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Teams;
use Faker\Generator as Faker;


$factory->define(Teams::class, function (Faker $faker) {
  
    $rank = ['iron','bronze','silver','gold', 'platinum', 'diamond', 'master', 'grand master', 'challenger'];
    $region = ['NA','EUW','KR','CH','WC'];

    return [
        'user_id' => $faker->numberBetween(0,100),
        'name'=> $faker->name,
        'rank'=> $rank[$faker->numberBetween(0,7)],
        'region'=> $region[$faker->numberBetween(0,4)],
    ];
});
