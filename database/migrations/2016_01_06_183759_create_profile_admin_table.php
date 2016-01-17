<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Creating the admin profile table
        Schema::create('admin_profile_table' , function(Blueprint $table){
            $table->increments("id") ;
            $table->string("name") ;
            $table->string("image") ;
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
        Schema::dropIfExists("admin_profile_table");
    }
}
