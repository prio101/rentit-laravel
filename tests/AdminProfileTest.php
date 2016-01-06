<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Model\AdminProfile ;

class AdminProfileTest extends TestCase
{
   /**
    * Test of the profile route
    *
    * @return Illuminate\Http\Response
    * */

    public function testAdminProfileRoute(){
        $this->visit('admin/profile')->see("Admin Profile")->assertResponseStatus(200);
    }

    /**
     * Test of the getting all data
     *
     * @return array
     * */

    public function testAdminProfileData(){
        $adminData = AdminProfile::all()->first();

        $this->visit('admin/profile')->assertEquals($adminData , $adminData  );

    }
}
