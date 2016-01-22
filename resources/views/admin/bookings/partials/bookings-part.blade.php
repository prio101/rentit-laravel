
<html>
    <head>
        <title>Datasheet</title>
    </head>
    <body>
    <div class="row mt">
        <div class="col-md-12">
            <div class="content-panel">
                <table class="table table-striped table-advance table-hover">
                    <h4>Bookings List</h4>

                    <hr>
                    <thead>
                    <tr>
                        <th>&nbsp;Client ID</th>
                        <th class="hidden-phone">&nbsp;Car ID</th>
                        <th>&nbsp;Receive Branch</th>
                        <th>&nbsp;Leaving Branch</th>
                        <th>&nbsp;Receive Date</th>
                        <th>&nbsp;Leaving Date</th>
                        <th>&nbsp;Price Plan</th>
                        <th>&nbsp;Promotion Code</th>
                        <th>&nbsp;Status</th>
                        <th>&nbsp;Actions</th>
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
                            <td>
                                @if($booking->status == 1)
                                    <span class="label label-success label-mini">Completed</span>
                                @elseif($booking->status == 2)
                                    <span class="label label-warning label-mini">On Service</span>
                                @elseif($booking->status == 3)
                                    <span class="label label-info label-mini">Upcoming</span>
                                @endif
                            </td>

                        </tr>
                    @endforeach


                    </tbody>
                </table>
            </div><!-- /content-panel -->
        </div><!-- /col-md-12 -->
    </div><!-- /row -->
    </body>
</html>
