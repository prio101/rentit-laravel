<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

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

    public function testIndexListing(){
        $price = PriceModel::all();
        $this->assertArrayHasKey($price);
    }
}
