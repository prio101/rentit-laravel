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
        $this->visit('admin/bookings');
    }

    /*
     * Test the Add Bookings Panel and its status code
     *
     * */

    public function testBookingsAddPanel(){
        $this->visit('admin/bookings/add');
    }

    /*
     * Test the rows inside the booking index panel
     * JsonApi
     * @return void
     * */
//    public function testBookingIndexJson(){
//        $this->get('admin/bookings')->seeJson() ;
//    }



}