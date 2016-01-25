<!DOCTYPE html>
<html lang="en" ng-app="rentItApp">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>RENT IT</title>
    <meta name="description" content="A free HTML template and UI Kit built on Bootstrap" />
    <meta name="keywords" content="free html template, bootstrap, ui kit, sass" />
    <meta name="author" content="Peter Finlan and Taty Grassini Codrops" />
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/img/favicon/apple-touch-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('assets/img/favicon/apple-touch-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/img/favicon/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/favicon/apple-touch-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/img/favicon/apple-touch-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/img/favicon/apple-touch-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/img/favicon/apple-touch-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/img/favicon/apple-touch-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/favicon/apple-touch-icon-180x180.png')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon/favicon-32x32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon/android-chrome-192x192.png')}}" sizes="192x192">
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon/favicon-96x96.png')}}" sizes="96x96">
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon/favicon-16x16.png')}}" sizes="16x16">
    <link rel="manifest" href="{{asset('assets/img/favicon/manifest.json')}}">
    <link rel="shortcut icon" href="{{asset('assets/img/favicon/favicon.ico')}}">
    <meta name="msapplication-TileColor" content="#663fb5">
    <meta name="msapplication-TileImage" content="{{asset('assets/img/favicon/mstile-144x144.png')}}">
    <meta name="msapplication-config" content="{{asset('assets/img/favicon/browserconfig.xml')}}">
    <meta name="theme-color" content="#663fb5">
    <link rel="stylesheet" href="{{asset('assets/css/landio.css')}}">
</head>

<body>

@yield('content')


<!-- Footer
================================================== -->

<footer class="section-footer bg-inverse" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-5">
                <div class="media">
                    <div class="media-left">
                        <span class="media-object icon-logo display-1"></span>
                    </div>
                    <small class="media-body media-bottom">
                        &copy; Land.io 2015. <br>
                        Designed by Peter Finlan, developed by Taty Grassini, exclusively for Codrops.
                    </small>
                </div>
            </div>
            <div class="col-md-6 col-lg-7">
                <ul class="nav nav-inline">
                    <li class="nav-item">
                        <a class="nav-link" href="./index-carousel.html"><small>NEW</small> Slides<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="ui-elements.html">UI Kit</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://github.com/tatygrassini/landio-html" target="_blank">GitHub</a></li>
                    <li class="nav-item"><a class="nav-link scroll-top" href="#totop">Back to top <span class="icon-caret-up"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

{{--Adding the angular scripts--}}
<script src="/bower/angular/angular.min.js"></script>
{{--Angular Route--}}
<script src="/bower/angular-route/angular-route.min.js"></script>
{{--Angular Mocks--}}
<script src="/bower/angular-mocks/angular-mocks.js"></script>

{{--app js--}}
<script src="/app.js"></script>
{{--Controller js files--}}
<script src="/carsController.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="{{asset('assets/js/landio.min.js')}}"></script>
</body>
</html>