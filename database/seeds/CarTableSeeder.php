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

        DB::table('cars')->insert(
            [
                'name' => ''
            ]
        );

    }
}
