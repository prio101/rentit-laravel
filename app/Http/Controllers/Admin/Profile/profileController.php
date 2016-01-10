<?php

namespace App\Http\Controllers\Admin\Profile;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\AdminProfile;
use Illuminate\Support\Facades\Redirect;

class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Returning the profile data
        $adminData = AdminProfile::all()->last();

        return view('admin.profile.index' , ['admin' =>$adminData]) ;

    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // Get all the data
        $admin = AdminProfile::all()->last() ;
        $admin->name = $request->input('name');


        $destinationPath = base_path('public/assets/img/adminprofile/') ;
        $imagename = $admin->id.'.png';

        $request->file('image')->move($destinationPath , $imagename);
        $admin->image = $imagename ;

        $admin->save() ;

        return Redirect::to('admin/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
