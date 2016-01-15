<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ExtraModel extends Model
{
    //Custom table name
    protected $table = 'extra_table' ;

//    Fillable fields
    protected $fillable =['about' , 'contact'] ;
}
