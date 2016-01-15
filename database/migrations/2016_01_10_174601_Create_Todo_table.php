<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Creating the table
        Schema::create('todo_table' , function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('details');
            $table->string('priority');

            $table->timestamp('updated_at');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Drop table
        Schema::drop('todo_table');
    }
}
