<?php

namespace Faker;
use Illuminate\Database\Seeder;


class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create the car table seeder
        $faker = Faker::person ;
        DB::table('cars')->insert(
            [
//                'name' => 'Audi Model'.Faker::date('thisYear'),
//                'fuel_type' => ''

            ]
        );

    }
}
