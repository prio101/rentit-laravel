@extends('master-layout')


@section('content')

    <section id="main-content">
        <section class="wrapper site-min-height">
            <h3><i class="fa fa-square-o"></i>&nbsp;Price List</h3><small>Rent It System</small>
            <hr>
            <div>
                <span><a href="{{url('admin/price/add')}}" class="btn btn-primary btn-theme btn-lg" data-toggle="tooltip" title="Add New"><i class="fa fa-plus "></i>&nbsp; Add New</a></span>
            </div>

            <hr>

            @foreach($price as $price)
                <div class="col-md-4 col-sm-4 mb">
                    <div class="green-panel pn red-panel">
                        <div class="green-header red-header">
                            <h5>{{$price->name}}</h5>
                        </div>
                        <div class="cash-plan">
                            <i class="fa fa-money fa-3x"></i>
                        </div>
                        <ul class="list-price-data">
                            <li>Amount:{{$price->amount}} $</li>
                            <li>Mileage:{{$price->mileage}} Km</li>
                            <li>Special Amount:{{$price->special}} %</li>
                            <li></li>
                        </ul>

                        <a href="{{url('admin/price/edit/'.$price->id)}}" class="btn  btn-success">Edit</a>
                        {!! Form::open(['url' => ['admin/price/delete' , $price->id] , 'method' =>'DELETE' ]) !!}
                            {!! Form::submit('Delete' , ['class' => 'btn  btn-warning']) !!}
                        {!! Form::close() !!}
                    </div>

                </div><! --/col-md-4 -->
            @endforeach


            




        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

@stop