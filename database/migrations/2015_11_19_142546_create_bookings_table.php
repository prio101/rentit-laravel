<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Creating the Schema for the Bookings Table
        Schema::create('bookings' , function(Blueprint $table){
            $table->increments('id') ;
            $table->integer('client_id') ;
            $table->integer('car_id') ;
            $table->string('receive_place') ;
            $table->string('leaving_place') ;
            $table->date('receive_date') ;
            $table->date('leaving_date') ;
            $table->integer('price_plan') ;
            $table->integer('promotion_code') ;

        }) ;

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop method for the Schema of Bookings Table
        Schema::dropIfExists('bookings') ;

    }
}
