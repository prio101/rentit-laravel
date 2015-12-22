@extends('master-layout')

@section('content')
        <!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="row mt">
            <h3 class="title text-center">Add New Car</h3>

            <div class="col-md-1">
                <a href="{{ url('admin/cars') }}" class="btn btn-theme02 btn-lg" data-toggle="tooltip" title="Bookings All Panel" ><i class="fa  fa-chevron-left"></i>&nbsp;Go Back</a>
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


                {!! Form::open(array('action'=>'Admin\Cars\carsController@store' , 'class'=>'form-horizontal style-form form-panel')) !!}
                {{--{{ csrf_token() }}--}}

                <div class="form-group">

                    {!! Form::label('client-id','Client ID (If Any)',array('class'=>'col-sm-2 col-sm-2 control-label')) !!}
                    <div class="col-sm-10">
                        {!! Form::text('client-id',null,array('class'=>'form-control','placeholder'=>'xxxx-xxx')) !!}
                    </div>
                </div>

               <div class="form-group">
                   {!! Form::label('Name of the car'  ,'', ['class'=>'col-sm-2 control-label']) !!}

                   <div class="col-sm-10">
                       {!! Form::text('name' , null , ['class'=>'form-control' , 'placeholder' =>'Example: Audi model 2015']) !!}


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
                        {!! Form::select('fuel_type'  , ['Petrol' => 'Petrol' , 'Diesel' => 'Diesel' , 'Octane' => 'Octane'  , 'Gas' => 'Gas'] , ['class'=>'form-control']) !!}


                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('Car Class'  ,'', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {!! Form::select('class'  , ['Luxery' => 'Luxery' , 'Middle' => 'Middle' , 'Comfort' => 'Comfort'] , ['class'=>'form-control']) !!}


                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('Gearbox - Auto'  ,'', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {!! Form::checkbox('gearbox'  , 'Auto' , ['class'=>'form-control']) !!}


                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('Fuel Usage'  ,'', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {!! Form::text('fuel_usage'  , '' , ['class'=>'form-control' , 'placeholder' => '350 km / L']) !!}


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
                        {!! Form::select('price_paln'  , ['Plan A' =>'Plan A' , 'Plan B' => 'Plan B' , 'Plan C' => 'Plan C'] , ['class'=>'form-control' , 'placeholder' => '4']) !!}


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