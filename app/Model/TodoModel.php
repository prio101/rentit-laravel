<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TodoModel extends Model
{
    //Custom table
    protected $table = 'todo_table' ;

//    Fillable
    protected $fillable =['name' , 'details' , 'priority'] ;
}
