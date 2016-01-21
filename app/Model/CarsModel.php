<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CarsModel extends Model
{
    //
    protected $table = 'cars';


    public function getLuxaryCars(){
        $cars = $this->all();

        $cars->whereLoose('status' , 2);
        return $cars;
    }

}
