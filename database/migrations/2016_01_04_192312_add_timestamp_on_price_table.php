<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTimestampOnPriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Adding the timestamp
        Schema::table('price_table',function(Blueprint $table){
            $table->dateTime("updated_at");
            $table->dateTime("created_at");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Dropping the table column
        Schema::table('price_table' , function(Blueprint $table){
            $table->dropIfExists([
                "updated_at",
                "created_at"
            ]);
        });
    }
}
