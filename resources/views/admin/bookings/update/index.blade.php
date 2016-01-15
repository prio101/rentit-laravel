@extends('master-layout')


@section('content')
        <!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="row mt">
            <h3 class="title text-center">Update Existing Booking </h3>

            <div class="col-md-1">
                <a href="{{ url('admin/bookings') }}" class="btn btn-theme02 btn-lg" data-toggle="tooltip" title="Bookings All Panel" ><i class="fa  fa-chevron-left"></i>&nbsp;Go Back</a>
            </div>

        </div>
        <h1>Edit {{ $bookings->car_id }}</h1>
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

        </div>

        {!! Form::model($bookings , ['url'=>[ 'admin/bookings/update' , $bookings->id] , 'method' => 'PATCH']) !!}
        <div class="form-group">

            {!! Form::label('client-id','Client ID (If Any)',array('class'=>'col-sm-2 col-sm-2 control-label')) !!}
            <div class="col-sm-10">
                {!! Form::text('client_id',Input::old('client_id'),array('class'=>'form-control' )) !!}
            </div>
        </div>

        <div class="form-group">

            {!! Form::label('car-id' ,'Car ID ' , array('class'=>'col-sm-2 col-sm-2 control-label') ) !!}
            <div class="col-sm-10">

                {!! Form::text('car_id' , null , array('class'=>'form-control' )) !!}
            </div>
        </div>

        <div class="form-group">

            {!! Form::label('receive-place' , 'Receive Place' , array('class'=>'col-sm-2 col-sm-2 control-label' )) !!}
            <div class="col-sm-10">

                {!! Form::text('receive_place' , null , array('class'=>'form-control' )) !!}
            </div>
        </div>

        <div class="form-group">

            {!! Form::label('leaving-place' , 'Leaving  Place' , array('class'=>'col-sm-2 col-sm-2 control-label')) !!}
            <div class="col-sm-10">

                {!! Form::text('leaving_place' , null , array('class'=>'form-control' , 'placeholder' => 'Example Address')) !!}
            </div>
        </div>

        <div class="form-group">

            {!! Form::label('receive-date', 'Receive Date' ,array('class'=>'col-sm-2 col-sm-2 control-label') ) !!}
            <div class="col-sm-10">

                {!! Form::text('receive_date' , null , array('class'=>'form-control' , 'placeholder' =>'dd-mm-YYYY')) !!}
            </div>
        </div>

        <div class="form-group">

            {!! Form::label('leaving-date' , 'Leaving Date',array('class'=>'col-sm-2 col-sm-2 control-label')) !!}
            <div class="col-sm-10">

                {!! Form::text('leaving_date' , null , array('class'=>'form-control' , 'placeholder' => 'dd-mm-YYYY')) !!}
            </div>
        </div>

        <div class="form-group">

            {!! Form::label('price-plan' , 'Price Plan' , array('class'=>'col-sm-2 col-sm-2 control-label')) !!}
            <div class="col-sm-10">

                {!! Form::text('price_plan',null , array('class'=>'form-control' , 'placeholder' =>'Price Plan Name')) !!}
            </div>
        </div>

        <div class="form-group">

            {!! Form::label('promotion-code' , 'Promotion-code' , array('class'=>'col-sm-2 col-sm-2 control-label')) !!}
            <div class="col-sm-10">

                {!! Form::text('promotion_code' , null , array('class'=>'form-control' , 'placeholder'=>'xxxx')) !!}
            </div>
        </div>

        <div class="text-center">

            {!! Form::submit('Save' ,  array('class'=>'btn btn-theme03 btn-lg')) !!}
        </div>
        {!!  Form::close()  !!}

    </section>
</section>

@stop