@extends('master-layout')

@section('content')
        <!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="row mt">
            <h3 class="title text-center">Add New Bookings</h3>

            <div class="col-md-1">
                <a href="{{ url('admin/bookings') }}" class="btn btn-theme02 btn-lg" data-toggle="tooltip" title="Bookings All Panel" ><i class="fa  fa-chevron-left"></i>&nbsp;Go Back</a>
            </div>

        </div>
        <hr>

        <div class="row mt">
            <div class="col-md-6 col-sm-8 col-lg-8">

                    {!! Form::open(array('action'=>'Admin\Bookings\bookingsController@store' , 'class'=>'form-horizontal style-form')) !!}


                    <div class="form-group">

                        {!! Form::label('client-id','Client ID (If Any)',array('class'=>'col-sm-2 col-sm-2 control-label')) !!}
                        <div class="col-sm-10">
                            {!! Form::text('client-id',null,array('class'=>'form-control','placeholder'=>'xxxx-xxx')) !!}
                        </div>
                    </div>

                    <div class="form-group">

                        {!! Form::label('car-id' ,'Car ID ' , array('class'=>'col-sm-2 col-sm-2 control-label') ) !!}
                        <div class="col-sm-10">

                        {!! Form::text('car-id' , null , array('class'=>'form-control' , 'placeholder'=>'XXXXXX-XXXX')) !!}
                        </div>
                    </div>

                    <div class="form-group">

                        {!! Form::label('receive-place' , 'Receive Place' , array('class'=>'col-sm-2 col-sm-2 control-label' )) !!}
                        <div class="col-sm-10">

                            {!! Form::text('car-id' , null , array('class'=>'form-control' , 'placeholder'=>'Example Address')) !!}
                        </div>
                    </div>

                    <div class="form-group">

                        {!! Form::label('leaving-place' , 'Leaving  Place' , array('class'=>'col-sm-2 col-sm-2 control-label')) !!}
                        <div class="col-sm-10">

                            {!! Form::text('leaving-place' , null , array('class'=>'form-control' , 'placeholder' => 'Example Address')) !!}
                        </div>
                    </div>

                    <div class="form-group">

                        {!! Form::label('receive-date', 'Receive Date' ,array('class'=>'col-sm-2 col-sm-2 control-label') ) !!}
                        <div class="col-sm-10">

                            {!! Form::text('receive-date' , null , array('class'=>'form-control' , 'placeholder' =>'dd-mm-YYYY')) !!}
                        </div>
                    </div>

                    <div class="form-group">

                        {!! Form::label('leaving-date' , 'Leaving Date',array('class'=>'col-sm-2 col-sm-2 control-label')) !!}
                        <div class="col-sm-10">

                            {!! Form::text('leaving-date' , null , array('class'=>'form-control' , 'placeholder' => 'dd-mm-YYYY')) !!}
                        </div>
                    </div>

                    <div class="form-group">

                        {!! Form::label('price-plan' , 'Price Plan' , array('class'=>'col-sm-2 col-sm-2 control-label')) !!}
                        <div class="col-sm-10">

                            {!! Form::text('price-plan',null , array('class'=>'form-control' , 'placeholder' =>'Price Plan Name')) !!}
                        </div>
                    </div>

                    <div class="form-group">

                        {!! Form::label('promotion-code' , 'Promotion-code' , array('class'=>'col-sm-2 col-sm-2 control-label')) !!}
                        <div class="col-sm-10">

                            {!! Form::text('promotion-code' , null , array('class'=>'form-control' , 'placeholder'=>'xxxx')) !!}
                        </div>
                    </div>

                    <div class="text-center">

                        {!! Form::submit('Save' ,  array('class'=>'btn btn-theme03 btn-lg')) !!}
                    </div>


                {!! Form::close() !!}
            </div>
        </div>



    </section>
</section>
@stop
