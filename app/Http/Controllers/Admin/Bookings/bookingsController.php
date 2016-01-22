<?php

namespace App\Http\Controllers\Admin\Bookings;

use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\BookingsModel;
use App\Model\AdminProfile;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Excel;



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
       $admin = AdminProfile::all()->last();

           return view('admin.bookings.index', ['bookings' => $bookings, 'admin' => $admin]);

    }

    /**
     * Export to Excel data sheet
     *
     * @return \Maatwebsite\Excel\Excel
     * */
    public function excel(Excel $xls){
        $carbon = Carbon::now();


//        $doc  = $excel->create('Bookings-Excel-Sheet'.$carbon , function($excel){
//            $excel->sheet('Bookings-excel-sheet' , function($sheet){
//
//                $bookings = BookingsModel::all();
//                $sheet->loadView('admin/bookings/partials/bookings-part',['bookings' => $bookings ]);
//            });
//        });

         $doc = $xls->create('Bookings-Excel'.$carbon , function($excel){
             $excel->sheet('booking' , function($sheet){
                 $bookings = BookingsModel::all();
                 $sheet->loadView('admin.bookings.partials.bookings-part',['bookings' => $bookings ]);
             });

         })->download();

        return $doc;
    }

    /*
     * Display a listing of the resource by status Completed
     * @return void
    * */
    public function completedList(){
        $bookingsCompleted = BookingsModel::all()->where('status','1');
        $admin = AdminProfile::all()->last();

        return view('admin.bookings.completedIndex',['bookingsCompleted'=>$bookingsCompleted, 'admin' =>$admin]) ;
    }

    /*
     * Display a listing of the resources by status Ongoing
     * @return void
     * */
    public function ongoingList(){
        $bookingsOngoing = BookingsModel::all()->where('status','2');
        $admin = AdminProfile::all()->last();

        return view('admin.bookings.ongoingIndex',['bookingsOngoing'=>$bookingsOngoing, 'admin' =>$admin]);
    }

    /*
     * Display a listing of resources by status Upcoming
     * @return void
     * */
    public function upcomingList(){
        $bookingsUpcoming = BookingsModel::all()->where('status','3');
        $admin = AdminProfile::all()->last();

        return view('admin.bookings.upcomingIndex',['bookingsUpcoming'=>$bookingsUpcoming, 'admin' =>$admin]) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admin = AdminProfile::all()->last();
       return view('admin.bookings.add.index',['admin'=>$admin]);
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
        $bookings = BookingsModel::find($id) ;
        $admin = AdminProfile::all()->last();



        //Showing the specified data
        return view('admin.bookings.update.index')->with('bookings' , $bookings, 'admin' ,$admin);

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


            $booking = BookingsModel::find($id) ;

            $booking->client_id = Input::get('client_id') ;
            $booking->car_id = Input::get('car_id') ;
            $booking->receive_place = Input::get('receive_place') ;
            $booking->leaving_place = Input::get('leaving_place') ;
            $booking->receive_date  = Input::get('receive_date') ;
            $booking->leaving_date  = Input::get('leaving_date') ;
            $booking->price_plan    = Input::get('price_plan') ;
            $booking->promotion_code = Input::get('promotion_code') ;

            $booking->save();

            return Redirect::to('/admin/bookings/');


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
