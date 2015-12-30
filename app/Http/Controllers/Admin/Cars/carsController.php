<?php

namespace App\Http\Controllers\Admin\Cars;

use App\Model\CarsModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class carsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars =  CarsModel::all();
        return view("admin.cars.index" , ['cars' => $cars]) ;
    }

    /**
     * Display a listing of the cars in garage
     *
     * @return \Illuminate\Http\Response
     * */
    public function onGarage(){
        $cars = CarsModel::all()->whereLoose('status' , 1);

        return view('admin.cars.on-garage' , ['cars' => $cars]) ;
    }

    /**
     * Display a listing of the cars in service
     *
     * @return \Illuminate\Http\Response
     * */
    public function onService(){
        $cars = CarsModel::all()->whereLoose('status' , 2) ;

        return view('admin.cars.on-service' , ['cars' => $cars]);
    }

    /**
     * Display a listing of the cars in repair
     *
     * @return \Illuminate\Http\Response
     * */

    public function onRepair(){
        $cars = CarsModel::all()->whereLoose('status' , 3);

        return view('admin.cars.on-repair' , ['cars'=> $cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Create car page
        return view('admin.cars.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /*
         * validator
         * */
        $rules = [
            'name'=>'required' ,
            'image' => 'required',
            'fuel_type'=>'required',
            'class'=>'required',
            'gearbox'=>'required',
            'fuel_usage'=>'required',
            'max_passenger'=>'required',
            'price_plan'=>'required',
            'features' => 'required',
            'status' => 'required'


        ] ;

        $validator = Validator::make(Input::all() , $rules);

        /*Conditions*/

        if($validator){
            $cars = new CarsModel();

            $cars->name = Input::get('name');
            $cars->fuel_type = Input::get('fuel_type');
            $cars->class = Input::get('class');
            $cars->gearbox = Input::get('gearbox');
            $cars->fuel_usage = Input::get('fuel_usage');
            $cars->max_passenger = Input::get('max_passenger');
            $cars->price_plan = Input::get('price_plan');
            $cars->features = Input::get('features');
            $cars->status = Input::get('status');

            $cars->save();

            /*
             * Saving the image
             * */
                $destinationPath = base_path('/public/assets/img/cars/') ;
                $imageName = $cars->id.'-car-image.png';
                //$imageName = $request->id.Input::file('image')->getClientOriginalName().'.'.getClientOriginalExtenstion();

                $request->file('image')->move($destinationPath, $imageName);
                $cars->image = $imageName ;
                $cars->save();
                return Redirect::to('admin/cars/') ;


//            $imageName = $request->id.'.'.$request->file('image')->getClientOriginalExtension();
//
//            $request->file('image')->move( base_path().'/public/assets/img/cars/' , $imageName) ;
        /*
         * Returning to the cars section
         * */

        }else{
            return Redirect::to('admin/cars/create')->withErrors($validator)->withInput();
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
        //Show a specific car data
        $cars = CarsModel::findOrFail($id) ;

        return view('admin.cars.show.index' , ['cars' => $cars]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Edit data of the cars
        $cars = CarsModel::findOrFail($id) ;


        return view('admin.cars.edit.index' , ['cars' =>$cars]) ;
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
        return "Updated";
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
        $cars = CarsModel::find($id);

        $cars->delete();

        Session::flash('message' , 'Deleted Successfully');

        return Redirect::to('admin/cars' );
    }
}
