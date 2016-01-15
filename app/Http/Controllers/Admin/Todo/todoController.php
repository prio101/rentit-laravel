<?php

namespace App\Http\Controllers\Admin\Todo;

use App\Model\AdminProfile;
use App\Model\TodoModel;
use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class todoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = AdminProfile::all()->first();
        $todo  = TodoModel::all() ;
        return view('admin.todo.index' , ['admin' =>$admin , 'todo' =>$todo]);
        //Listing

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admin = AdminProfile::all()->first();

        return view('admin.todo.add.index' , ['admin' =>$admin ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TodoRequest $request)
    {
        //Storing the data
        TodoModel::create($request->all());

        return Redirect::To('admin/todo');
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
        //Destroy
        $todo = TodoModel::findOrFail($id) ;

        $todo->delete() ;

       return Redirect::To('admin/todo');
    }
}
