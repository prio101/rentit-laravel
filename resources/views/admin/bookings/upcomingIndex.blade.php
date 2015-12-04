@extends('master-layout')


@section('content')
    <section id="main-content">
        <section class="wrapper site-min-height">
            <h3><i class="fa fa-square-o"></i>&nbsp;Bookings</h3><small>Rent It System</small>
            <hr>


            <div class="row mt">
                <div class="col-md-12">
                    <div class="content-panel">
                        <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i>Upcoming Bookings</h4>

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

                            @foreach($bookingsUpcoming as $booking)
                                <tr>
                                    <td><a href="basic_table.html#">{{$booking->client_id}}</a></td>
                                    <td class="hidden-phone">{{$booking->car_id}}</td>
                                    <td>{{$booking->receive_place}}</td>

                                    <td>{{$booking->leaving_place}}</td>
                                    <td>{{$booking->receive_date}}</td>
                                    <td>{{$booking->leaving_date}}</td>
                                    <td>{{$booking->price_plan}}</td>
                                    <td>{{$booking->promotion_code}}</td>
                                    <td><span class="label label-info label-mini">Upcoming</span></td>
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