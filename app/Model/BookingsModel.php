<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BookingsModel extends Model
{
    // Selecting the table
    protected $table = 'bookings' ;

    /*
     * Mass Assignable Fields
     * */
    protected $fillable = ['client_id' , 'car_id' , 'receive_place' , 'leaving_place' , 'receive_date' , 'leaving_date' ,'price_plan' , 'promotion_code' ] ;

    /**
     *  Getting all the bookings data listing
     *  @return resource
     * */

    public function allBookingsListing(){
        $bookings = BookingsModel::all();

        return $bookings ;
    }
}
