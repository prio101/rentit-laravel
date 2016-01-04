<?php

use App\Model ;
use App\Model\PriceModel;

use Faker\Generator ;
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



//$factory->define(App\User::class, function (Faker\Generator $faker) {
//    return [
//        'name' => $faker->name,
//        'email' => $faker->email,
//        'password' => bcrypt(str_random(10)),
//        'remember_token' => str_random(10),
//    ];
//});


$factory->define(PriceModel::class , function(Generator $faker){
    return [

        'name'      => $faker->name,
        'amount'    => $faker->numberBetween($min = 1000, $max = 10000),
        'mileage'   => $faker->numberBetween($min = 10, $max = 20),
        'special'   => $faker->numberBetween($min = 10, $max = 20),

    ] ;
}) ;