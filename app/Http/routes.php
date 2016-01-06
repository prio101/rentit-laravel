<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function(){
 return view('welcome') ;
});



/* ------------------------------------------------
 **************************************************
 * Admin panel
 * ------------------------------------------------
 * ************************************************
 * @return response
 * */

Route::group(['prefix'=>'admin' , 'namespace' =>'Admin'] , function(){

/*GET the route of page /admin*/
    Route::get('/' , 'adminHomeController@index');

/*GET the route of the admin bookings panel by group*/
    Route::group(['prefix'=>'bookings' , 'namespace' => 'Bookings'] , function(){
//       GET the route of the Admin Bookings Panel
        Route::get('/' , 'bookingsController@index') ;

//        GET the bookings Completed filter
        Route::get('/completed', 'bookingsController@completedList') ;

//        GET the bookings of ongoing Filter
        Route::get('/ongoing','bookingsController@ongoingList');

//        GET the bookings of upcoming list
        Route::get('/upcoming','bookingsController@upcomingList');

//        GET the Add Bookings
        Route::get('/add' , 'bookingsController@create') ;
//        Post the bookings Form
        Route::post('/add' , 'bookingsController@store');
//        Delete the booking
        Route::DELETE('/delete/{id}' ,'bookingsController@destroy' ) ;

//        Edit Page View
        Route::GET('/{id}/edit' , 'bookingsController@edit') ;
//        Update Page Request
        Route::PATCH('/update/{id} ' , 'bookingsController@update') ;

    }) ;
/*GET the route of the admin Cars panel by Group*/
    Route::group(['prefix'=>'cars','namespace'=>'Cars'] , function(){
//        GET the route for Admin Cars Panel
        Route::GET('/', 'carsController@index') ;
//        GET the route for the add of the car
        Route::GET('/add' , 'carsController@create');
//        GET the list of the cars inside garage
        Route::GET('/ongarage' , 'carsController@onGarage');
//        GET the list of cars in service
        Route::GET('/onservice' ,'carsController@onService');
//        GET the list of cars on repair
        Route::GET('/onrepair' , 'carsController@onRepair');
//        Storing the data in the cars table
        Route::POST('/store' , 'carsController@store') ;
//        Getting the specific car data
        Route::GET('/show/{id}' , 'carsController@show') ;
//        Destroy the car data
        Route::DELETE('/delete/{id}' , 'carsController@destroy');

//        Getting  the specific data car to edit
        Route::GET('/{id}/edit', 'carsController@edit');

//        Posting the update data
        Route::PATCH('/update/{id}', 'carsController@update');

    }) ;
/*Price List Admin panel*/

    Route::group(['prefix'=>'price' , 'namespace'=>'Price'] , function(){
//        GET the listing of index data
        Route::GET('/' ,'priceController@index' );
//        GET the Add page of pricing
        Route::GET('/add' , 'priceController@create');
//        POST the price plan
        Route::POST('/store' , 'priceController@store') ;

//        GET the edit page
        Route::GET('/edit/{id}' , 'priceController@edit');

//        PATCH the edit page data
        Route::PATCH('/update/{id}' , 'priceController@update') ;

//        DELETE the price panel data
        Route::DELETE('/delete/{id}' , 'priceController@destroy');
    });

/*Theme Module Admin Panel*/
    Route::group(['prefix' => 'theme' , 'namespace' => 'Theme'] , function(){
//        GET the listing of index theme
    Route::GET('/' , 'themeController@index');
    });
/*Admin Profile Edit*/
    Route::group(['prefix' => 'profile' , 'namespace' => 'Profile'] , function(){
//        GET the admin index
        Route::GET('/' , 'profileController@index');

//        UPDATE the admin profile
        Route::PATCH('/update' , 'profileController@update');
    }) ;



});


// User Profile Page
