@extends('master-layout')


@section('content')
        <!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="row mt">
            <h3 class="title text-center">Update Existing Booking </h3>

            <div class="col-md-1">
                <a href="{{ url('admin/bookings') }}" class="btn btn-theme02 btn-lg" data-toggle="tooltip" title="Bookings All Panel" ><i class="fa  fa-chevron-left"></i>&nbsp;Go Back</a>
            </div>

        </div>
        <hr>

        {{--{!! Form::model( $bookings = \App\Model\BookingsModel::findOrFail($id) , [--}}
                        {{--'method'=>'PATCH' ,--}}
                        {{--['url' => 'admin/bookings/{$id}/update/' , $bookings->id]--}}
          {{--]) !!}--}}

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

        </div>

    </section>
</section>

@stop