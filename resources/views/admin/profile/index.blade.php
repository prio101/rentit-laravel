@extends('master-layout')

@section('content')
    <section id="main-content">
        <section class="wrapper site-min-height">
            <h3><i class="fa fa-square-o"></i>&nbsp;Admin Profile</h3><small>Rent It System</small>
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

                    {!!  Form::model($admin , ['url' => ['admin/profile/update' ]  , 'method' => 'PATCH' ,'class'=>'form-horizontal style-form form-panel' , 'novalidate'=>'novalidate' ,  'files'=>true]   )!!}

                    {{--{{ csrf_token() }}--}}



                    <div class="form-group">
                        {!! Form::label('Name'  ,'', ['class'=>'col-sm-2 control-label']) !!}

                        <div class="col-sm-10">
                            {!! Form::text('name' , $admin->name, ['class'=>'form-control' , 'placeholder' =>' Name']) !!}


                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('Image'  ,'', ['class'=>'col-sm-2 control-label']) !!}

                        <div class="col-sm-10">
                            {!! Form::file('image' , null, ['class'=>'form-control' , 'placeholder' =>'image']) !!}
                            <div class="alert alert success">Previous Image : {{$admin->image }}</div>

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









        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->
@stop