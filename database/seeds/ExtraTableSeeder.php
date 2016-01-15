<?php

use Illuminate\Database\Seeder;
use App\Model\ExtraModel;
class ExtraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Table Seeder

        factory(ExtraModel::class)->create();
    }
}
