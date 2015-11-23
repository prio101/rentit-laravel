<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BookingsPanelTest extends TestCase
{
    /**
     * Route is working for Bookings List
     * Panel Home
     *
     * @return View
     */
    public function testBookingPanelReturnRoute()
    {
        $this->visit('admin/bookings')
             ->see('Bookings');

    }

    /*
     * Test for the Status Codes in the Bookings
     * Panel
     * */
    public function testBookingPanelStatusCode(){
        $this->visit('admin/bookings')
             ->seeStatusCode(200);
    }

    /*
     * Test of booking completed list
     * */
    public function testBookingCompleted(){

    }

    /*
     * Test the Add Bookings Panel and its status code
     *
     * */

    public function testBookingsAddPanel(){
        $this->visit('admin/bookings/add')
             ->seeStatusCode(200);
    }

    /*
     * Test the rows inside the booking index panel
     * JsonApi
     * @return void
     * */
//    public function testBookingIndexJson(){
//        $this->get('admin/bookings')->seeJson() ;
//    }

    /*
     * Test The Add Form data
     * @return void
     * */
    public function testBookingsAddForm(){
        $this->visit('admin/bookings/add')
             ->type('client id' , 'client-id')
             ->press('Save')
             ->post('admin/bookings/add') ;
    }


}