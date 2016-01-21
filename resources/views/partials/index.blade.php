@extends('master-layout')


@section('content')
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3><i class="fa fa-square-o"></i>&nbsp;RentIt</h3><small>Main Board</small>
        <hr>
        <div class="row mt">
            <div class="text-center">
                <h3></h3>
            </div>
                <div class="col-md-4">
                    <canvas id="doughnut" width="300" height="300"></canvas>
                </div>


            <div class="col-md-4">
                <canvas id="polarArea" width="300" height="300"></canvas>
            </div>

            <div class="col-md-4">
                <canvas id="radar" width="300" height="300"></canvas>
            </div>

            <div class="col-md-5">
                <canvas id="line" width="400" height="400"></canvas>
            </div>





            <div>
                <canvas id="bar" width="400" height="400"></canvas>
            </div>

            <div>
                <canvas id="pie" width="400" height="400"></canvas>
            </div>
        </div>
        <p>
          
        </p>
    </section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->
@stop
