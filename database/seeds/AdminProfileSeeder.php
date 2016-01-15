<?php

use Illuminate\Database\Seeder;
use App\Model\AdminProfile;
class AdminProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Factory data input
        factory(AdminProfile::class)->create();
    }
}
