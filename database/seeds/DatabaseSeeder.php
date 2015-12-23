<?php

use App\Model\BookingsModel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        $this->call(BookingsTableSeeder::class) ;


//        factory(BookingsModel::class )->create();

        Model::reguard();
    }
}
