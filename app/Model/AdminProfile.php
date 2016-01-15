<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AdminProfile extends Model
{
    //Custom Table Name
    protected $table = "admin_profile_table" ;

    protected $fillable = ['name','image'] ;
}
