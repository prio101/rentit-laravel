<?php

namespace App\Http\Controllers\Api\V1;


use App\Model\CarsModel;
use App\Model\ExtraModel;
use App\Model\PriceModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Psy\Util\Json;

use App\Model\BookingsModel;

class ApiController extends Controller
{
    /**
     * Display a listing of the Bookings data.
     *
     * @return Json
     *
     */
    public function bookingsApi(BookingsModel $bookings){
       $allBookingsList = $bookings->allBookingsListing();

       return response()->json($allBookingsList);
    }


    /**
     *  Display a listing of the cars data
     *  @return Json
     * */
    public function carsApi(CarsModel $cars){
        $carsList = $cars->allCarsList();

        return response()->json($carsList);
    }

    /**
     *  Display first three price panel data
     *  @return Json
     *
     * */

    public function priceApi(PriceModel $price){
        $priceData = $price->firstThreePricePanel();

        return response()->json($priceData);
    }


    /**
     *  Display all extra data
     *  @return Json
     * */
    public function extraApi(ExtraModel $extra){
        $extraData = $extra->allExtradata();

        return response()->json($extraData);
    }


    /**
     *  Getting the data from booking front end form
     *  @param Json
     *  @return void
     * */
    public function bookingSubmitApi(Request $request){
        $booking = new BookingsModel();

        $booking->name = $request->get('name');
        $booking->receive_place = $request->get('receive-place');
        $booking->leaving_place = $request->get('leaving-place');
        $booking->receive_date = $request->get('receive-date');
        $booking->leaving_date = $request->get('leaving-date');
        $booking->price_plan = $request->get('price-plan');
        $booking->promotion_code = $request->get('promotion-code');

        $booking->save();

        return Redirect::to('/');
    }

}
