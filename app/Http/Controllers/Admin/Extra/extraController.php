<?php

namespace App\Http\Controllers\Admin\Extra;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\AdminProfile;
use App\Model\ExtraModel;
use Illuminate\Support\Facades\Redirect;

class extraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutIndex()
    {

        $admin = AdminProfile::all()->last();
        $extra = ExtraModel::all()->first();
        //return
        return view('admin.extra.about.index' , ['admin'=> $admin , 'extra' => $extra]) ;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactIndex(){
        $admin = AdminProfile::all()->last();
        $extra = ExtraModel::all()->first();
        //return
        return view('admin.extra.contact.index' , ['admin'=> $admin , 'extra' => $extra]) ;
    }





    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function aboutUpdate(Request $request)
    {
        //Update data
        $extra = ExtraModel::all()->first();

        $extra->about   = $request->get('about') ;


        $extra->save();

        return Redirect::To('admin/');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contactUpdate(Request $request)
    {
        //Update data
        //Update data
        $extra = ExtraModel::all()->first();

        $extra->contact   = $request->get('contact') ;


        $extra->save();

        return Redirect::To('admin/');
    }


}
