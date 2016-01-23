<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CarsModel extends Model
{
    //
    protected $table = 'cars';


    /**
     *  Getting listing of the all cars
     *  @param Void
     *  @return Json
     * */

    public function allCarsList(){
        $cars = CarsModel::all();

        return $cars ;
    }
}
