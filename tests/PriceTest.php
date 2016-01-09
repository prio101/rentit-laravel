<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Model\PriceModel ;
class PriceTest extends TestCase
{
    use DatabaseTransactions;

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
             ;

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


        $this->visit('admin/price')
             ->click('Edit')
            ->seePageIs('admin/price/edit/1')
            ->assertResponseStatus(200);
    }


    /**
     * Test the Add Form Entry
     *
     * @return void
     * */
    public function testAddPriceForm(){

        $price = factory(PriceModel::class)->create() ;

        $this->visit("admin/price/add")
            ->press("Save")
            ->returnArgument($price);
    }


    /**
     * Test the edit form routes
     * @param Integer ID
     * @return Illuminate\Http\Response
     * */
    public function testEditPricePanelRoutes(){
        $price  =  PriceModel::all()->first();

        $this->visit("admin/price/edit/".$price->id)
            ->see("Edit Price Panel")
            ->assertResponseStatus(200) ;
    }

    /**
     * Test the edit form entry
     * @return Illuminate\Http\Response
     * */

    public function testEditPricePanelEntry(){
        $price = factory(PriceModel::class)->create() ;

        $priceId = PriceModel::all()->first() ;

        $this->visit("admin/price/edit/".$priceId->id)
            ->press("Edit")
            ->returnArgument($price);

    }


    public function testDeleteButtonPricePanel(){
        $price = PriceModel::all()->last();
        $delete = $price->delete() ;
        $this->visit('admin/price/')
            ->press('Delete')
            ->returnArgument($delete) ;
    }

}
