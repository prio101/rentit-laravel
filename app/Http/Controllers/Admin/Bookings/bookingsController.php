<?php

namespace App\Http\Controllers\Admin\Bookings;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\BookingsModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


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
        /*Validation*/

        $rules =[
                'client-id' => 'required',
                'car-id'    => 'required' ,
                'receive-place' => 'required' ,
                'leaving-place' => 'required' ,
                'receive-date'  => 'required' ,
                'leaving-date'  => 'required' ,
                'price-plan'    => 'required' ,
                'promotion-code' => 'required'


        ];


        /*Piping through the validator class*/

        $validator = Validator::make(Input::all() , $rules);

        /*Checking Condition*/

        if($validator->fails()){
           return Redirect::to('admin/bookings')->withErrors($validator)->withInput();
        }
        else{
            /*Store data*/
            $booking = new BookingsModel() ;

            $booking->client_id = Input::get('client-id') ;
            $booking->car_id = Input::get('car-id') ;
            $booking->receive_place = Input::get('receive-place') ;
            $booking->leaving_place = Input::get('leaving-place') ;
            $booking->receive_date  = Input::get('receive-date') ;
            $booking->leaving_date  = Input::get('leaving-date') ;
            $booking->price_plan    = Input::get('price-plan') ;
            $booking->promotion_code = Input::get('promotion-code') ;

            $booking->save();

            /*Redirect with success message*/
            Session::flash('message' , 'Booking saved') ;

            return Redirect::to('admin/bookings') ;

        }




    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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

        //Loading model by ID
        $booking =new BookingsModel() ;
        $booking = $booking->find($id);



        //Showing the specified data
        return view('admin.bookings.update.index' ,['booking'=>$booking]);
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
        //Loading model by ID

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Taking the model bind
        $booking = BookingsModel::find($id);

        //Getting ID and deleting it
        $booking->delete() ;

        //Redirect
        Session::flash('message' , 'Deleted The Booking data');

        return Redirect::to('admin/bookings') ;


    }
}
