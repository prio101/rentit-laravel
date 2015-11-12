<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RootRouteCheckerTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testRoot()
    {
        $this->visit('/')
             ->see('RentIt System') ;
    }
}
