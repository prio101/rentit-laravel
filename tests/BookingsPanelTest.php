<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

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
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->withSession(['foo' => 'bar'])
            ->visit('admin/bookings')
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

        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->withSession(['foo' => 'bar'])
            ->visit('admin/bookings/completed')
            ->see('Completed')->seeStatusCode(200);
    }

    /*
     * Test of the booking upcoming list
     * */
    public function testBookingUpcoming(){

        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->withSession(['foo'=>'bar'])
            ->visit('admin/bookings/upcoming')
            ->see('Upcoming');
    }

    /*
     * Test the booking ongoing list
     * */
    public function testBookingOngoing(){
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->withSession(['foo'=>'bar'])
            ->visit('admin/bookings/ongoing')
            ->see('Ongoing');
    }

    /*
     * Test the Add Bookings Panel and its status code
     *
     * */

    public function testBookingsAddPanel(){
        $this->visit('admin/bookings/add')
             ->seeStatusCode(200);
    }




    


}