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

                                        @if($car->status == 1)
                                            <span class="label label-info">On Garage
                                        @elseif($car->status == 2)
                                             <span class="label label-success">On Service
                                        @else
                                             <span class="label label-danger">On Repair
                                        @endif

                                    </span>
                                    <h5 class="mt">{{$car->name}}</h5>
                                    <h6>Milage : {{$car->fuel_usage}} KM/L</h6>
                                    <a href="{{  url('admin/cars/show' , $car->id) }}" class="btn btn-small btn-theme04">More Data</a>
                                </div>
                            </div><! --/col-md-4 -->

                        @endforeach


                        </div>




                </div><!-- /content-panel -->
            </div><!-- /col-md-12 -->
        </div><!-- /row -->

    </section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->
@stop

