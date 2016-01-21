<?php

namespace App\Http\Controllers\Admin;

use App\Model\AdminProfile;
use App\Model\BookingsModel;
use App\Model\CarsModel;
use DebugBar\DataCollector\TimeDataCollector;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\AdminHomeModel;

class adminHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     * return the data for graph
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin          = AdminProfile::all()->last() ;
        $bookings       = BookingsModel::all()->first();
        $carsLuxary     = CarsModel::all()->keyBy('class',1)->count();
        $carsMiddle     = CarsModel::all()->whereLoose('class' , 2)->count();
        $carsComfort    = CarsModel::all()->whereLoose('class' , 3)->count();

        return view('partials/index' ,
                        [
                            'admin' =>$admin ,
                            'booking' => $bookings ,
                            'carsLuxary'=>$carsLuxary ,
                            'carsMiddle'=>$carsMiddle,
                            'carsComfort' => $carsComfort
                        ]) ;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
