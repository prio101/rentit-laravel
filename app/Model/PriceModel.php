<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PriceModel extends Model
{
    //Custom table name
    protected $table = "price_table" ;

    /*
     * Mass Assignable Fields
     * */
    protected $fillable = ['name' , 'amount' , 'mileage' , 'special'] ;
}
