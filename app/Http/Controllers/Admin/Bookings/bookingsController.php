<?php

namespace App\Http\Controllers\Admin\Bookings;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\BookingsModel;


class bookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $bookings = BookingsModel::all() ;
       $bookings->toJson() ;

       return view('admin.bookings.index' , ['bookings' => $bookings] ) ;
       //return $bookings->toJson();

    }

    /*
     * Display a listing of the resource by status Completed
     * @return void
    * */
    public function completedList(){
        $bookingsCompleted = BookingsModel::all()->where('status','1');

        return view('admin.bookings.completedIndex',['bookingsCompleted'=>$bookingsCompleted]) ;
    }

    /*
     * Display a listing of the resources by status Ongoing
     * @return void
     * */
    public function ongoingList(){
        $bookingsOngoing = BookingsModel::all()->where('status','2');

        return view('admin.bookings.ongoingIndex',['bookingsOngoing'=>$bookingsOngoing]);
    }

    /*
     * Display a listing of resources by status Upcoming
     * @return void
     * */
    public function upcomingList(){
        $bookingsUpcoming = BookingsModel::all()->where('status','3');

        return view('admin.bookings.upcomingIndex',['bookingsUpcoming'=>$bookingsUpcoming]) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.bookings.add.index');
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
