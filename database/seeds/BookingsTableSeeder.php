<?php


use Illuminate\Database\Seeder;
use Faker\Factory;

class BookingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creating the Seeder for the
        // Bookings Table



/*
 * Creating 100 seed data for the bookings table
 * */
        for($i = 0  ; $i <= 100 ; $i++){

        DB::table('bookings')->insert([
            'client_id'     => random_int(1 , 1000),
            'car_id'        => random_int(1 , 1000) ,
            'receive_place' => Faker\Provider\bn_BD\Address::state() ,
            'leaving_place' => Faker\Provider\bn_BD\Address::state() ,
            'receive_date'  => \Faker\Provider\DateTime::date('Y-m-d') ,
            'leaving_date'  => \Faker\Provider\DateTime::dateTimeThisMonth() ,
            'price_plan'    => random_int(1 , 3),
            'promotion_code'=> random_int(10 , 20),
            'created_at'    => \Faker\Provider\DateTime::date('Y-m-d'),
            'updated_at'    => \Faker\Provider\DateTime::date('Y-m-d'),
            'status'        => random_int(1 , 3)
        ]);
        }
    }
}
