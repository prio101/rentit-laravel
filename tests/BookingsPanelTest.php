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



     /*
      * Testing the Bookings Add Panel Validation
      * */
        public function testBookingsAddValidationFail(){
            $this->visit('admin/bookings/add')
                  ->type('clientId','client-id')
                  ->type('carsId','cars-id')
                  ->type('receivePlace','receive-place')
                  ->type('leavingPlace','leaving-place')
                  ->type('receiveDate','receive-date')
                  ->type('leavingDate','leaving-date')
                  ->type('pricePlan' , 'price-plan')
                  ->type('promotion-code' ,'promotion-code')
                  ->press('save')
                  ->seePageIs('admin/bookings/add');
        }


     /*
      * Test the view of bookings ordered by the status Completed
      * @return void
      * */

     public function testBookingsCompletedViewByStatus(){


     }

}