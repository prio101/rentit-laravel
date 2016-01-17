<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema for the extra table
        Schema::create('extra_table' , function(Blueprint $table){
            $table->increments('id');
            $table->longText('about');
            $table->text('contact');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Dropping the extra table
        Schema::dropIfExists('extra_table');
    }
}
