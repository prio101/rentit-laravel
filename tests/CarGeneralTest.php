<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CarGeneralTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }


    /**
     * Show Specific car data
     *
     * @return void
     *
     * */

    public function testShowSpecificData($id = 1){
        $this->visit('admin/cars/show/'.$id)->see('Details Of the car');
    }


}
