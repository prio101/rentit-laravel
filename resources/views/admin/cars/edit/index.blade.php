@extends('master-layout')

@section('content')
        <!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="row mt">
            <h3 class="title text-center">Update New Car</h3>

            <div class="col-md-1">
                <a href="{{ url('admin/cars') }}" class="btn btn-theme02 btn-lg" data-toggle="tooltip" title="Cars All Panel" ><i class="fa  fa-chevron-left"></i>&nbsp;Go Back</a>
            </div>

        </div>
        <hr>

        <div class="row mt">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>#&nbsp;{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-md-6 col-sm-8 col-lg-8">


                {!! Form::model($cars ,array('action'=>['Admin\Cars\carsController@update' , $cars->id] , 'class'=>'form-horizontal style-form form-panel' , 'novalidate'=>'novalidate' ,  'files'=>true , 'method' => 'PATCH')) !!}
                {{--{{ csrf_token() }}--}}



                <div class="form-group">
                    {!! Form::label('Name of the car'  ,'', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {!! Form::text('name' ,null  , ['class'=>'form-control' , 'placeholder' =>'Example: Audi model 2015']) !!}


                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('Image'  ,'', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {!! Form::file('image' , null , ['class'=>'form-control' , 'placeholder' =>'image']) !!}


                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('Fuel Type'  ,'', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {!! Form::select('fuel_type'  , ['1' => 'Petrol' , '2' => 'Diesel' , '3' => 'Octane'  , '4' => 'Gas'] , ['class'=>'form-control']) !!}


                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('Car Class'  ,'', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {!! Form::select('class'  , ['1' => 'Luxery' , '2' => 'Middle' , '3' => 'Comfort'] , ['class'=>'form-control']) !!}


                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('Status'  ,'', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {!! Form::select('status'  , ['1' => 'On Garage' , '2' => 'On Service' , '3' => 'On Repair'] , ['class'=>'form-control']) !!}


                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('Gearbox - Auto'  ,'', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {!! Form::checkbox('gearbox'  , '1' , ['class'=>'form-control']) !!}


                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('Fuel Usage'  ,'', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {!! Form::text('fuel_usage'  , '' , ['class'=>'form-control' ]) !!}


                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('Max Passenger'  ,'', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {!! Form::text('max_passenger'  , '' , ['class'=>'form-control' , 'placeholder' => '4']) !!}


                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('Price Plan'  ,'', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {!! Form::select('price_plan'  , ['1' =>'Plan A' , '2' => 'Plan B' , '3' => 'Plan C'] , ['class'=>'form-control' , 'placeholder' => '4']) !!}


                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('Features'  ,'', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {!! Form::textarea('features'  ,'' , ['class'=>'form-control' , 'placeholder' => 'Air Condition , GPS ETC.']) !!}


                    </div>
                </div>

                <div class="form-group">


                    <div class="col-sm-10">
                        {!! Form::submit('Save' ,  array('class'=>'btn btn-theme03 btn-lg col-md-offset-7')) !!}


                    </div>
                </div>

                {!! Form::close() !!}
            </div>
        </div>



    </section>
</section>
@stop