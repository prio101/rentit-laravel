@extends("master-layout")

@section("content")
        <!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="row mt">
            <h3 class="title text-center">Edit Price Panel</h3>

            <div class="col-md-1">
                <a href="{{ url('admin/price') }}" class="btn btn-theme02 btn-lg" data-toggle="tooltip" title="Price All Panel" ><i class="fa  fa-chevron-left"></i>&nbsp;Go Back</a>
            </div>

        </div>
        <hr>

        <div class="row mt">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>#&nbsp;{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-md-6 col-sm-8 col-lg-8">

                {!!  Form::model($price , ['url' => ['admin/price/update' , $price->id]  , 'method' => 'PATCH' ,'class'=>'form-horizontal style-form form-panel' , 'novalidate'=>'novalidate' ,  'files'=>true]   )!!}

                {{--{{ csrf_token() }}--}}



                <div class="form-group">
                    {!! Form::label('Name'  ,'', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {!! Form::text('name' , null , ['class'=>'form-control' , 'placeholder' =>'Price Plan Name']) !!}


                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('Amount'  ,'', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {!! Form::text('amount' , null , ['class'=>'form-control' , 'placeholder' =>'Ex: 50$']) !!}


                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('Mileage'  ,'', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {!! Form::text('mileage' , null , ['class'=>'form-control' , 'placeholder' =>'EX: 15 KM']) !!}


                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('Special Amount'  ,'', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {!! Form::text('special' , null , ['class'=>'form-control' , 'placeholder' =>'EX: 8% OFF']) !!}


                    </div>
                </div>


                <div class="form-group">


                    <div class="col-sm-10">
                        {!! Form::submit('Edit' ,  array('class'=>'btn btn-theme03 btn-lg col-md-offset-7')) !!}


                    </div>
                </div>

                {!! Form::close() !!}
            </div>
        </div>



    </section>
</section>
@stop