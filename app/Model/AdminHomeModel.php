<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\BookingsModel;
use App\Model\CarsModel;
class AdminHomeModel extends Model
{
    //making Chart data for bookings

    public function carRentedMost(){
            $cars = CarsModel::all();
            $carsData=$cars['class']->where('status' , 1 );

        return $carsData;

    }

}
