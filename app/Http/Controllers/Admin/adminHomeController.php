<?php

namespace App\Http\Controllers\Admin;

use App\Model\AdminProfile;
use App\Model\BookingsModel;
use App\Model\CarsModel;
use DebugBar\DataCollector\TimeDataCollector;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;


class adminHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     * return the data for graph
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carbon = Carbon::now();

        $admin          = AdminProfile::all()->last() ;

        /*Cars Model On Service Graph*/
        $carsLuxary     = CarsModel::all()->where('status' , '2' )->where('class','1')->count();
        $carsMiddle     = CarsModel::all()->where('status' , '2' )->where('class','2')->count();
        $carsComfort    = CarsModel::all()->where('status' , '2' )->where('class','3')->count();


        /*Price Plan Most Popular*/
        $pricePlan1 = BookingsModel::all()->where('price_plan' , '1')->count();
        $pricePlan2 = BookingsModel::all()->where('price_plan' , '2')->count();
        $pricePlan3 = BookingsModel::all()->where('price_plan' , '3')->count();


        /*Bookings  Status*/

        $completed  = BookingsModel::all()->where('status' , '1')->where('receive_date' , $carbon->subMonth())->count();
        $onGoing    = BookingsModel::all()->where('status' , '2')->where('receive_date' , $carbon->subMonth())->count();
        $upComing   = BookingsModel::all()->where('status' , '3')->where('receive_date' , $carbon->subMonth())->count();



        return view('partials/index' ,
                        [
                            'admin' =>$admin ,

                            'carsLuxary'    =>$carsLuxary ,
                            'carsMiddle'    =>$carsMiddle,
                            'carsComfort'   => $carsComfort,
                            'pricePlan1'    => $pricePlan1,
                            'pricePlan2'    => $pricePlan2,
                            'pricePlan3'    => $pricePlan3,
                            'carbon'        => $carbon,
                            'completed'     => $completed,
                            'onGoing'       => $onGoing,
                            'upComing'      => $upComing
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
