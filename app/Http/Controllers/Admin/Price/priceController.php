<?php

namespace App\Http\Controllers\Admin\Price;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect ;

use App\Http\Requests;
use App\Http\Requests\CreatePricePanelRequest ;
use App\Http\Controllers\Controller;
use App\Model\PriceModel;
use App\Model\AdminProfile;
use Illuminate\Support\Facades\Validator;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Price Model Listing load
        $prices = PriceModel::all() ;
        $admin = AdminProfile::all()->last();
        return view('admin.price.index' , ['price' => $prices , 'admin' =>$admin]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Return the view
        return view('admin.price.add.index' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePricePanelRequest $request)
    {

        //Validation
        $rules = [
            'name'  => 'required' ,
            'amount'=> 'required' ,
            'mileage' => 'required' ,
            'special_amount' => 'required'
        ] ;

        


        PriceModel::create($request->all());

        return redirect("admin/price") ;

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
        // Return the view of the price panel
        $pricePanel = PriceModel::find($id) ;
        $admin = AdminProfile::all()->last();

        return view("admin.price.edit.index" , ['price' => $pricePanel , 'admin' =>$admin]) ;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreatePricePanelRequest $request, $id)
    {
        //Edit the price panel
        $price = PriceModel::find($id) ;

        $price->name    = $request->input('name') ;
        $price->amount  = $request->input('amount') ;
        $price->mileage = $request->input('mileage');
        $price->special = $request->input('special');


        $price->save();


        return Redirect::to('admin/price');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete Button
        $price = PriceModel::find($id) ;

        $price->delete() ;

        return Redirect::to('admin/price');
    }
}
