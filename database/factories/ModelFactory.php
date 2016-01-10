<?php

use App\Model ;
use App\Model\PriceModel;
use App\Model\AdminProfile ;
use App\Model\ExtraModel;
use App\Model\TodoModel;

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


//User factory
$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

//Price panel factory
$factory->define(PriceModel::class , function(Generator $faker){
    return [

        'name'      => $faker->name,
        'amount'    => $faker->numberBetween($min = 1000, $max = 10000),
        'mileage'   => $faker->numberBetween($min = 10, $max = 20),
        'special'   => $faker->numberBetween($min = 10, $max = 20),

    ] ;


}) ;

// Admin Profile factory
$factory->define(AdminProfile::class , function(Generator $faker){
    return [
        'name' => $faker->name ,
        'image' => $faker->numberBetween($min=1 , $max = 10).'.png'
    ];
}) ;

//Extra table seeder
$factory->define(ExtraModel::class , function(Generator $faker){
    return [
        'about'     => $faker->text ,
        'contact'   => $faker->address
    ] ;
});


//Todo list table

$factory->define(TodoModel::class , function(Generator $faker){
    return [
        'name'      => $faker->name ,
        'details'   => $faker->text ,
        'priority'  => $faker->numberBetween(1,3)

    ] ;
});
