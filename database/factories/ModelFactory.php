<?php

use App\Model ;

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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


$factory->define(BookingsModel::class , function(Faker\Generator $faker) {
    return [
        'client_id' => $faker->randomDigitNotNull ,
        'car_id'    => $faker->randomDigit ,
        'receive_place' => $faker->address ,
        'leaving_place' => $faker->address ,
        'receive_date'  => $faker->date('Y-m-d') ,
        'leaving_date'  => $faker->date() ,
        'price_plan'    => $faker->randomDigit,
        'promotion_code'=> $faker->randomDigit
    ];
}) ;
