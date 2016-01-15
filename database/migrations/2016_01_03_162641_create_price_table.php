<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Creating the price table
        Schema::create( "price_table", function(Blueprint $table){
            $table->increments("id");
            $table->string("name");
            $table->integer("amount");
            $table->integer("mileage");
            $table->integer("special");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Dropping the table schema
        Schema::drop("price_table");
    }
}
