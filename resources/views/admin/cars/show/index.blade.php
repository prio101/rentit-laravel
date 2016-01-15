@extends('master-layout')


@section('content')
        <!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">

        <br>
        <a href="{{url('admin/cars/')}}" class="btn btn-default btn-info "><i class="fa  fa-angle-double-left"></i>&nbsp; Go back</a>
        <br>
        <h3><i class="fa fa-angle-right"></i> {{$cars->name}}</h3>
        <div class="row mt">
            <div class="col-lg-12">
                Details Of the car : {{$cars->name}}
                <hr>


                <div class="col-md-8 col-sm-8 col-md-offset-3">
                    <div class="col-md-1">
                        @if($cars->status==1)
                            <span class="badge badge-event text-center"><i class="fa fa-2x fa-anchor"></i></span>
                        @elseif($cars->status==2)
                            <span class="badge badge-hot text-center"><i class="fa fa-2x fa-car"></i></span>
                        @else
                            <span class="badge badge-popular text-center" ><i class="fa fa-2x fa-wrench"></i></span>
                        @endif
                    </div>
                    <img src="{{asset('assets/img/cars')}}/{{$cars->id}}-car-image.png"  width="400px" alt="{{$cars->name}}" class="img-responsive">

                </div>

                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h4>{{$cars->name}}</h4>

                            </div>
                            <div class="panel-body">
                                {{--Fuel Type--}}
                                @if($cars->fuel_type==1)
                                    <p class="text-center">Fuel : Petrol</p>
                                 @elseif($cars->fuel_type==2)
                                    <p class="text-center">Fuel : Diesel</p>
                                  @elseif($cars->fuel_type==3)
                                    <p class="text-center">Fuel : Octane</p>
                                  @else
                                    <p class="text-center">Fuel : Gas</p>
                                @endif
                                <hr>

                                {{--Class Type--}}
                                @if($cars->class==1)
                                    <p class="text-center">Class : Luxary</p>
                                @elseif($cars->class==2)
                                    <p class="text-center">Class : Middle</p>
                                @else
                                    <p class="text-center  ">Class : Cozy</p>

                                @endif

                                <hr>
                                {{--GearBox--}}
                                @if($cars->gearbox==1)
                                    <p class="text-center  ">Gearbox / Transmission : Auto</p>
                                @else
                                    <p class="text-center  ">Gearbox / Transmission : Manual</p>
                                @endif

                                <hr>
                                <p class="text-center  ">Milage : {{$cars->fuel_usage}} KM/L</p>

                                <hr>
                                <p class="text-center  ">Max passenger : {{$cars->max_passenger}} Persons</p>

                                <hr>
                                @if($cars->price_plan==1)
                                    <p class="text-center  ">Price Plan: Plan A </p>
                                @elseif($cars->price_plan==2)
                                    <p class="text-center  ">Price Plan: Plan B</p>
                                @else
                                    <p class="text-center  ">Price Plan: Plan C</p>
                                @endif
                                <hr>
                                <strong>Features</strong> : <p>{{$cars->features}}</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-md-offset-5 col-sm-4 col-sm-offset-8 ">
                <a href="{{url('admin/cars' )}}/{{$cars->id}}/edit" class="btn btn-block btn-primary">Edit</a>
            </div>
            <div class="col-md-2 col-md-offset-5 col-sm-4 col-sm-offset-8 ">
                {!! Form::open(array('url'=>'admin/cars/delete/'.$cars->id )) !!}
                {!! Form::hidden('_method' , 'DELETE') !!}
                {!! Form::submit('Delete' , array('class'=>'btn btn-warning btn-block')) !!}
                {!! Form::close() !!}
            </div>

        </div>

    </section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->
@stop