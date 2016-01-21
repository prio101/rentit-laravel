@extends('admin-home-layout')


@section('content')
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3><i class="fa fa-square-o"></i>&nbsp;RentIt</h3><small>Main Board</small>
        <hr>
            
        <div class="row mt">
            <div class="row">
                <div class="col-md-6 text-center" >


                    <canvas id="doughnut" width="330" height="300"></canvas>

                    <div >
                        <h5>Most Car Category On Service Right Now</h5>
                        <span class="btn btn-sm btn-danger">Luxary</span>
                        <span class="btn btn-sm btn-primary">Middle</span>
                        <span class="btn btn-sm btn-success">Comfort</span>
                    </div>
                </div>

                <div class="col-md-6 text-center">
                    <canvas id="pie" width="300" height="300"></canvas>
                    <div >

                        <h5>Price Plan Most Popular</h5>
                        <span class="price-plan-one">price plan 1</span>
                        <span class="price-plan-two">price plan 2</span>
                        <span class="price-plan-three">price plan 3</span>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <div>
                        <h5>Most Car Rented By Branch Last Month</h5>
                    </div>
                    <canvas id="radar" width="500" height="450"></canvas>
                    <strong>Complete the branch form data first</strong>


                </div>


            </div>


            <div class="row">
                <div class="col-md-6 text-center">
                    <h5>Bookings Previous Month</h5>
                    <canvas id="line" width="400" height="400"></canvas>
                </div>

                <div class="col-md-6 text-center">
                    <h5>User Growth In whole Year</h5>
                    <canvas id="bar" width="400" height="400"></canvas>
                </div>
                <strong>NEED TO COMPLETE USER PROFILE FIRST</strong>

            </div>











        </div>
        <p>
          
        </p>
    </section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->
@stop
