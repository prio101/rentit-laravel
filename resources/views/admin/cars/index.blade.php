@extends('master-layout')

@section('content')

        <!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3><i class="fa fa-square-o"></i>&nbsp;Cars</h3><small>Rent It System</small>
        <hr>
        <div>
            <span><a href="{{url('admin/cars/add')}}" class="btn btn-primary btn-theme btn-lg" data-toggle="tooltip" title="Add New"><i class="fa fa-plus "></i>&nbsp; Add New</a></span>
        </div>





        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel">
                    <table class="table table-striped table-advance table-hover">
                        <h4><i class="fa fa-angle-right"></i>Cars List</h4>

                        <hr>
                        {{--Single Car Image--}}
                        <div class="row">
                        @foreach($cars as $car)
                            <div class="col-lg-4 col-md-4 col-sm-4 mb">
                                <div class="product-panel-2 pn">
                                    <div class="badge badge-hot">
                                        @if($car->class == 1)
                                                Luxary
                                        @elseif($car->class== 2)
                                                Middle
                                        @else
                                                Cozy
                                        @endif

                                    </div>
                                    <img src="{{asset('assets/img/cars')}}/{{$car->id}}-car-image.png" width="200" alt="{{$car->name}}">
                                    <h5 class="mt">{{$car->name}}</h5>
                                    <h6>Milage : {{$car->fuel_usage}} KM/L</h6>
                                    <a href="#" class="btn btn-small btn-theme04">More Data</a>
                                </div>
                            </div><! --/col-md-4 -->

                        @endforeach

                            {{--<div class="col-lg-4 col-md-4 col-sm-4 mb">--}}
                                {{--<div class="product-panel-2 pn">--}}
                                    {{--<div class="badge badge-hot">HOT</div>--}}
                                    {{--<img src="{{asset('assets/img/product.jpg')}}" width="200" alt="">--}}
                                    {{--<h5 class="mt">Flat Pack Heritage</h5>--}}
                                    {{--<h6>TOTAL SALES: 1388</h6>--}}
                                    {{--<button class="btn btn-small btn-theme04">FULL REPORT</button>--}}
                                {{--</div>--}}
                            {{--</div><! --/col-md-4 -->--}}

                            {{--<div class="col-lg-4 col-md-4 col-sm-4 mb">--}}
                                {{--<div class="product-panel-2 pn">--}}
                                    {{--<div class="badge badge-hot">HOT</div>--}}
                                    {{--<img src="{{asset('assets/img/product.jpg')}}" width="200" alt="">--}}
                                    {{--<h5 class="mt">Flat Pack Heritage</h5>--}}
                                    {{--<h6>TOTAL SALES: 1388</h6>--}}
                                    {{--<button class="btn btn-small btn-theme04">FULL REPORT</button>--}}
                                {{--</div>--}}
                            {{--</div><! --/col-md-4 -->--}}

                            {{--<div class="col-lg-4 col-md-4 col-sm-4 mb">--}}
                                {{--<div class="product-panel-2 pn">--}}
                                    {{--<div class="badge badge-hot">HOT</div>--}}
                                    {{--<img src="{{asset('assets/img/product.jpg')}}" width="200" alt="">--}}
                                    {{--<h5 class="mt">Flat Pack Heritage</h5>--}}
                                    {{--<h6>TOTAL SALES: 1388</h6>--}}
                                    {{--<button class="btn btn-small btn-theme04">FULL REPORT</button>--}}
                                {{--</div>--}}
                            {{--</div><! --/col-md-4 -->--}}
                        </div>



                        {{--<thead>--}}
                        {{--<tr>--}}
                            {{--<th><i class="fa fa-bullhorn"></i>&nbsp;Name</th>--}}
                            {{--<th><i class="fa fa-menu"></i>&nbsp;Image</th>--}}
                            {{--<th class="hidden-phone"><i class="fa fa-question-circle"></i>&nbsp;Fuel Type</th>--}}
                            {{--<th><i class="fa fa-bookmark"></i>&nbsp;Class</th>--}}
                            {{--<th><i class=" fa fa-edit"></i>&nbsp;Gearbox</th>--}}
                            {{--<th><i class="fa fa-menu">&nbsp;Fuel Usage</i></th>--}}
                            {{--<th><i class="fa fa-menu"></i>&nbsp;Max Passenger</th>--}}
                            {{--<th><i class="fa fa-menu"></i>&nbsp;Price Plan</th>--}}
                            {{--<th><i class="fa fa-menu"></i>&nbsp;Features</th>--}}

                            {{--<th><i class="fa fa-file"></i>&nbsp;Status</th>--}}
                            {{--<th><i class="fa fa-file"></i>&nbsp;Actions</th>--}}
                        {{--</tr>--}}
                        {{--</thead>--}}
                        {{--<tbody>--}}

                        {{--@foreach($bookings as $booking)--}}
                            {{--<tr>--}}
                                {{--<td><a href="basic_table.html#">{{$booking->client_id}}</a></td>--}}
                                {{--<td class="hidden-phone">{{$booking->car_id}}</td>--}}
                                {{--<td>{{$booking->receive_place}}</td>--}}

                                {{--<td>{{$booking->leaving_place}}</td>--}}
                                {{--<td>{{$booking->receive_date}}</td>--}}
                                {{--<td>{{$booking->leaving_date}}</td>--}}
                                {{--<td>{{$booking->price_plan}}</td>--}}
                                {{--<td>{{$booking->promotion_code}}</td>--}}
                                {{--<td>--}}
                                    {{--@if($booking->status == 1)--}}
                                        {{--<span class="label label-success label-mini">Completed</span>--}}
                                    {{--@elseif($booking->status == 2)--}}
                                        {{--<span class="label label-warning label-mini">On Service</span>--}}
                                    {{--@elseif($booking->status == 3)--}}
                                        {{--<span class="label label-info label-mini">Upcoming</span>--}}
                                    {{--@endif--}}
                                {{--</td>--}}
                                {{--<td>--}}


                                    {{--<a href="{{ url('admin/bookings/'.$booking->id.'/edit') }}" class="btn btn-primary btn-xs">Edit</a>--}}

                                    {{--{!! Form::open(array('url'=>'admin/bookings/delete/'.$booking->id )) !!}--}}
                                    {{--{!! Form::hidden('_method' , 'DELETE') !!}--}}
                                    {{--{!! Form::submit('Delete' , array('class'=>'btn btn-warning btn-xs')) !!}--}}
                                    {{--{!! Form::close() !!}--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                        {{--@endforeach--}}


                        {{--</tbody>--}}
                    {{--</table>--}}
                </div><!-- /content-panel -->
            </div><!-- /col-md-12 -->
        </div><!-- /row -->

    </section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->
@stop

