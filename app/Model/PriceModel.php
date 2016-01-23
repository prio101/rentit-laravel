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


    /**
     * Listing of the first three price panel
     *
     * @param void
     * @return Json
     * */
    public function firstThreePricePanel(){
        $price = self::having('id' , '<=' , 3)->get();

        return $price;
    }
}
