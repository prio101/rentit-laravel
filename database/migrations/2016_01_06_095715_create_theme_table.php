<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThemeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Creating the schema for the theme table

        Schema::create('theme_table' , function(Blueprint $table){
            $table->increments('id');
            $table->string("name");
            $table->integer("version");
            $table->string("image");
            $table->tinyInteger("status");

            $table->timestamp("updated_at");
            $table->timestamp("created_at");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Dropping the table
        Schema::drop("theme_table");
    }
}
