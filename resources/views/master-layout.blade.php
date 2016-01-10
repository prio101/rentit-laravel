<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>RentIt</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <!--external css-->
    <link href="{{ asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style-responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" >
    <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="{{ url('/admin') }}" class="logo"><i class="fa  fa-car"></i>&nbsp;<b>Rent It</b>
        </a>
        <!--logo end-->

        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li><a class="logout" href="{{url('auth/logout')}}">Logout</a></li>
            </ul>
        </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
     MAIN SIDEBAR MENU
     *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">

                <p class="centered"><a href="{{ url('admin/profile') }}"><img src="{{ asset('assets/img/adminprofile/'.$admin->image) }}" class="img-circle" width="60"></a></p>
                <h5 class="centered">{{$admin->name}}</h5>

                <li class="mt">
                    <a href="{{ url('/admin') }}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-desktop"></i>
                        <span>Bookings</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ url('admin/bookings') }}">All Bookings</a></li>
                        <li><a  href="{{ url('admin/bookings/completed') }}">Completed</a></li>
                        <li><a  href="{{ url('admin/bookings/ongoing') }}">Ongoing</a></li>
                        <li><a  href="{{ url('admin/bookings/upcoming') }}">Upcoming</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-car"></i>
                        <span>Cars</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ url('admin/cars') }}">All Cars</a></li>
                        <li><a  href="{{ url('admin/cars/ongarage') }}">On Garage</a></li>
                        <li><a  href="{{ url('admin/cars/onrepair') }}">On Repair</a></li>
                        <li><a  href="{{ url('admin/cars/onservice') }}">On Service</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="{{ url('admin/price') }}" >
                        <i class="fa fa-money"></i>
                        <span>Price</span>
                    </a>

                </li>

                {{--<li class="sub-menu">--}}
                    {{--<a href="{{ url('admin/theme') }}" >--}}
                        {{--<i class="fa fa-picture-o"></i>--}}
                        {{--<span>Theme</span>--}}
                    {{--</a>--}}

                {{--</li>--}}

                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-info"></i>
                        <span>Extra</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{url('admin/extra/about')}}">About</a></li>
                        <li><a href="{{url('admin/extra/contact')}}">Contact</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="{{url('admin/todo')}}" >
                        <i class="fa fa-th-list"></i>
                        <span>To Do</span>
                    </a>

                </li>


            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->


    {{--Start Of the Content--}}
    @yield('content')

    {{--End of the content--}}

    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            Copyright:2015 &copy; <a href="{{ url('/admin') }}"><b>RentIt</b></a>
            <a href="blank.html#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui-1.9.2.custom.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.ui.touch-punch.min.js') }}"></script>
<script class="include" type="text/javascript" src="{{ asset('assets/js/jquery.dcjqaccordion.2.7.js') }}"></script>
<script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nicescroll.js') }}" type="text/javascript"></script>


<!--common script for all pages-->
<script src="{{ asset('assets/js/common-scripts.js') }}"></script>

<!--script for this page-->

<script src="{{ asset('assets/js/app.js') }}"></script>

<script src="{{ asset('assets/js/chart-master/Chart.js') }}"></script>
{{--<script src="{{ asset('assets/js/chartjs-conf.js') }}"></script>--}}
<!--script for this page-->
<script src="{{ asset('assets/js/morris-conf.js') }}"></script>

<script>
    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

</script>




</body>
</html>