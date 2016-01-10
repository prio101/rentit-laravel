<?php

use Illuminate\Database\Seeder;
use App\Model\TodoModel;

class TodolistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Factory

        for($i = 0 ; $i<=10 ; $i++){
            factory(TodoModel::class)->create() ;
        } ;
    }
}
