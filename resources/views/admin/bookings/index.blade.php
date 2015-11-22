@extends('master-layout')



@section('content')
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3><i class="fa fa-square-o"></i>&nbsp;Bookings</h3><small>Rent It System</small>
        <hr>
        <div>
            <span><a href="{{url('admin/bookings/add')}}" class="btn btn-primary btn-theme btn-lg" data-toggle="tooltip" title="Add New"><i class="fa fa-plus "></i>&nbsp; Add New</a></span>
        </div>

        <div class="tab-pane" id="chartjs">

            <div class="row mt">
                <div class="col-lg-6">
                    <div class="content-panel">
                        <h4><i class="fa fa-angle-right"></i> Comparison Bookings</h4>
                        <small>&nbsp; Comparison of Completed , Ongoing and Upcoming Bookings</small>
                        <div class="panel-body text-center">
                            <canvas id="doughnut" height="300" width="400"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="content-panel">
                        <h4><i class="fa fa-angle-right"></i> Ratio of Getting Booked</h4>
                        &nbsp; <small>Comparison of Bookings by year</small>
                        <div class="panel-body text-center">
                            <canvas id="line" height="300" width="400"></canvas>
                        </div>
                    </div>
                </div>

            </div>



        </div>



        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel">
                    <table class="table table-striped table-advance table-hover">
                        <h4><i class="fa fa-angle-right"></i>Bookings List</h4>

                        <hr>
                        <thead>
                        <tr>
                            <th><i class="fa fa-bullhorn"></i>&nbsp;Client ID</th>
                            <th class="hidden-phone"><i class="fa fa-question-circle"></i>&nbsp;Car ID</th>
                            <th><i class="fa fa-bookmark"></i>&nbsp;Receive Place</th>
                            <th><i class=" fa fa-edit"></i>&nbsp;Leaving Place</th>
                            <th><i class="fa fa-menu">&nbsp;Receive Date</i></th>
                            <th><i class="fa fa-menu"></i>&nbsp;Leaving Date</th>
                            <th><i class="fa fa-menu"></i>&nbsp;Price Plan</th>
                            <th><i class="fa fa-menu"></i>&nbsp;Promotion Code</th>
                            <th><i class="fa fa-file"></i>&nbsp;Status</th>
                            <th><i class="fa fa-file"></i>&nbsp;Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                            @foreach($bookings as $booking)
                            <tr>
                            <td><a href="basic_table.html#">{{$booking->client_id}}</a></td>
                            <td class="hidden-phone">{{$booking->car_id}}</td>
                            <td>{{$booking->receive_place}}</td>

                            <td>{{$booking->leaving_place}}</td>
                            <td>{{$booking->receive_date}}</td>
                            <td>{{$booking->leaving_date}}</td>
                            <td>{{$booking->price_plan}}</td>
                            <td>{{$booking->promotion_code}}</td>
                            <td><span class="label label-info label-mini">Due</span></td>
                            <td>
                                <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                            </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div><!-- /content-panel -->
            </div><!-- /col-md-12 -->
        </div><!-- /row -->

    </section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->
@stop
