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

    var Script = function () {

        var carsLuxary = {{$carsLuxary}} ;
        var carsMiddle ={{$carsMiddle}} ;
        var carsComfort = {{$carsComfort}} ;

        var pricePlan1 = {{$pricePlan1}} ;
        var pricePlan2 = {{$pricePlan2}} ;
        var pricePlan3 = {{$pricePlan3}} ;

        var completed = {{$completed}}
        var onGoing   = {{$onGoing}}
        var upComing  = {{$upComing}}

        var doughnutData = [
            {
                value: carsLuxary,
                color:"#F7464A",
                highlight: "#FF5A5E",
                label: "Luxary"
            },
            {
                value : carsMiddle,

                color : "#2ecc71",
                label: "Comfort"
            },
            {
                value : carsComfort,
                color : "#3498db",
                label: "Middle"
            }

        ];
        var lineChartData = {
            labels : ["Upcoming","Completed","Ongoing"],
            datasets : [
                {
                    fillColor : "rgba(220,220,220,0.5)",
                    strokeColor : "rgba(220,220,220,1)",
                    pointColor : "rgba(220,220,220,1)",
                    pointStrokeColor : "#fff",
                    data : [upComing,onGoing,completed]
                }

            ]

        };
        var pieData = [
            {
                value: pricePlan1,
                color:"#1abc9c"

            },
            {
                value : pricePlan2,
                color : "#16a085"
            },
            {
                value : pricePlan3,
                color : "#27ae60"
            }

        ];
        var barChartData = {
            labels : ["January","February","March","April","May","June","July"],
            datasets : [
                {
                    fillColor : "rgba(220,220,220,0.5)",
                    strokeColor : "rgba(220,220,220,1)",
                    data : [65,59,90,81,56,55,40]
                },
                {
                    fillColor : "rgba(151,187,205,0.5)",
                    strokeColor : "rgba(151,187,205,1)",
                    data : [28,48,40,19,96,27,100]
                }
            ]

        };
        var chartData = [
            {
                value : Math.random(),
                color: "#D97041"
            },
            {
                value : Math.random(),
                color: "#C7604C"
            },
            {
                value : Math.random(),
                color: "#21323D"
            },
            {
                value : Math.random(),
                color: "#9D9B7F"
            },
            {
                value : Math.random(),
                color: "#7D4F6D"
            },
            {
                value : Math.random(),
                color: "#584A5E"
            }
        ];
        var radarChartData = {
            labels : ["Dhaka","Chittagong","Rajshahi","Syllet","Barisal","Rangpur","Kumilla"],
            datasets : [
                {
                    fillColor : "rgba(220,220,220,0.5)",
                    strokeColor : "rgba(220,220,220,1)",
                    pointColor : "rgba(220,220,220,1)",
                    pointStrokeColor : "#fff",
                    data : [65,59,90,81,56,55,40]
                },
                {
                    fillColor : "rgba(151,187,205,0.5)",
                    strokeColor : "rgba(151,187,205,1)",
                    pointColor : "rgba(151,187,205,1)",
                    pointStrokeColor : "#fff",
                    data : [28,48,40,19,96,27,100]
                }
            ]

        };
        new Chart(document.getElementById("doughnut").getContext("2d")).Doughnut(doughnutData);
        new Chart(document.getElementById("line").getContext("2d")).Line(lineChartData);
        new Chart(document.getElementById("radar").getContext("2d")).Radar(radarChartData);

        new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
        new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);


    }();
</script>






</body>
</html>
