<?php

use Illuminate\Database\Seeder;
use App\Model\PriceModel;

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


        for($i = 0 ; $i<=10 ; $i++) {
            factory(PriceModel::class)->create();
        }
    }
}
