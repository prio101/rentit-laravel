<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('cars' , function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->integer('fuel_type');
            $table->integer('class');
            $table->string('gearbox');
            $table->integer('fuel_usage');
            $table->integer('max_passenger');
            $table->integer('price_plan');
            $table->string('features');
            $table->string('image');
            $table->date('created_at');
            $table->date('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Dropping the schema
        Schema::dropIfExists('cars');
    }
}
