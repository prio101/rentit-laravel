<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AdminInterfaceCheckerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRouteForAdminInterface()
    {
        $this->visit('/admin')
             ->see('RentIt');
    }
}
