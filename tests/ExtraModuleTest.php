<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class ExtraModuleTest extends TestCase
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
     * Test the Extra Module route
     * @return Illuminate\Http\Response
     * */

    public function testExtraPageAboutRoute(){
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->withSession(['foo'=>'bar'])
            ->visit('admin/extra/about')
            ->assertResponseStatus(200)
        ;
    }

    /**
     * Test the Extra Module route
     * @return Illuminate\Http\Response
     * */

    public function testExtraPageContactRoute(){
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->withSession(['foo'=>'bar'])
            ->visit('admin/extra/contact')
            ->assertResponseStatus(200)
        ;
    }


}
