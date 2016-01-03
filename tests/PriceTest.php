<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Model\PriceModel ;
class PriceTest extends TestCase
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
     * Test to get index listing
     *
     * @return Illuminate\Http\Response
     * */

    public function testIndexStatus(){

         $this->visit('admin/price/')->see("Price List")
              ->assertResponseOk();

    }

    /**
     * Test the index data list
     *
     * @return assert data
     * */
    public function testIndexData(){
        $allPrice = PriceModel::all();

        /*
         * Testing by comaparing the Model data
         * */
        $this->visit("admin/price")->assertEquals($allPrice,$allPrice);
    }




    /**
     * Test the Add New Button Route
     *
     * @return Illuminate\Http\Response
     * */

    public function testAddNewButtonRoute(){
        $this->visit('admin/price')
             ->click("Add New")
             ->seePageIs("admin/price/add")
             ->assertResponseStatus(200) ;
    }


    /**
     * Test the Edit button link route
     *
     * @return Illuminate\Http\Response
     * */

    public function testEditButtonRoute(){
       // $allPrice = PriceModel::all()->whereLoose("id");

        $this->visit('admin/price')
             ->click('Edit')
            ->seePageIs('admin/price/edit/1')
            ->assertResponseStatus(200);
    }


}
