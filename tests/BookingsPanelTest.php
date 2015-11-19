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
        $this->visit('admin/bookings')->seeStatusCode(200) ;
    }





}