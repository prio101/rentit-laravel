<!DOCTYPE html>
<html lang="en" ng-app="rentItApp">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Triangle</title>
    <link href="{{ asset('site_assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('site_assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('site_assets/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('site_assets/css/lightbox.css') }}" rel="stylesheet">
    <link href="{{ asset('site_assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('site_assets/css/responsive.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="{{ asset('site_site_assets/js/html5shiv.js') }}"></script>
    <script src="{{ asset('site_assets/js/respond.min.js') }}"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{ asset('site_assets/images/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('site_assets/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('site_assets/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('site_assets/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('site_assets/images/ico/apple-touch-icon-57-precomposed.png') }}">
</head><!--/head-->

<body>

@yield('content')


<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center bottom-separator">
                <img src="{{ asset('site_assets/images/home/under.png') }}" class="img-responsive inline" alt="">
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="testimonial bottom">

                    <div class="media">
                        <div class="pull-left">
                            <a href="#"><img src="{{ asset('assets/img/cars/6-car-image.png') }}" alt=""></a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="contact-info bottom">
                    <h2 id="contact">Contacts</h2>
                    <address>
                        @if($extra)
                            {{$extra->contact}}
                        @endif
                    </address>


                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="contact-form bottom">
                    <h2>Send a message</h2>
                    <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" required="required" placeholder="Email Id">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your text here"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="copyright-text text-center">
                    <p>&copy; Your Company 2014. All Rights Reserved.</p>
                    <p>Designed by <a target="_blank" href="http://www.themeum.com">Themeum</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--/#footer-->

{{--angular--}}
<script src="bower/angular/angular.min.js"></script>
<script src="bower/angular-route/angular-route.js"></script>
<script src="{{asset('site_assets/js/all.js')}}"></script>

<script type="text/javascript" src="{{ asset('site_assets/js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('site_assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('site_assets/js/lightbox.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('site_assets/js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('site_assets/js/main.js') }}"></script>
</body>
</html>