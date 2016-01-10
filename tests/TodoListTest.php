<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class TodoListTest extends TestCase
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

    /*
     * Test the route
     * */
    public function testRouteTodolist(){
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->withSession(['foo'=>'bar'])
            ->visit('admin/todo')
            ->assertResponseStatus(200);
    }
}
