@extends('master-layout')

@section('content')
        <!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="row mt">
            <h3 class="title text-center">Add New Bookings</h3>

            <div class="col-md-1">
                <a href="{{ url('admin/bookings') }}" class="btn btn-theme02 btn-lg" data-toggle="tooltip" title="Bookings All Panel" ><i class="fa  fa-chevron-left"></i>&nbsp;Go Back</a>
            </div>

        </div>
        <hr>

        <div class="row mt">
            <div class="col-md-6 col-sm-8 col-lg-8">
                <form class="form-horizontal style-form" method="get">
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Client ID (If Any)</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="XXXXXX-XXXX">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Car ID </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="XXXXXX-XXXX">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Receive Place</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Example Address">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Leaving  Place</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Example Address">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Receive Date</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="dd-mm-YYYY">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Leaving Place</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="dd-mm-YYYY">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Price Plan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Price Plan Name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Promotion Code</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="xxxx">
                        </div>
                    </div>

                    <div class="text-center">
                        <input type="submit" class="btn btn-theme03 btn-lg" value="Save">
                    </div>


                </form>
            </div>
        </div>



    </section>
</section>
@stop
