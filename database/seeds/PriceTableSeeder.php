<?php

use Illuminate\Database\Seeder;


class PriceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creating the fake data
        $faker = Faker\Factory::create() ;

        for($i = 0 ; $i<=10 ; $i++) {
            DB::table("price_table")->insert([
                'name' => $faker->name,
                'amount' => $faker->numberBetween($min = 1000, $max = 10000),
                'mileage' => $faker->numberBetween($min = 10, $max = 20),
                'special' => $faker->numberBetween($min = 10, $max = 20)

            ]);
        }
    }
}
