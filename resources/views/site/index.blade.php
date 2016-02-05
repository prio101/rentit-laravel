@extends('site-layout')

@section('content')

    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 overflow">

                </div>
            </div>
        </div>
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="#">
                        <h1><i class="fa fa-square"></i>Rent It</h1>
                    </a>

                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="{{url('/')}}">Home</a></li>

                        <li><a href="{{url('/#about')}}">About</a></li>

                        <li><a href="{{url('/#contact')}} ">Contact</a></li>
                    </ul>
                </div>
                
            </div>
        </div>
    </header>
    <!--/#header-->

    <section id="home-slider">
        <div class="container">
            <div class="main-slider">
                <div class="slide-text">
                    <h1>Craft Your Journey</h1>

                    <a href="#book-now" class="btn btn-common">Book a car Now</a>
                </div>
                <img src="{{asset('assets/img/cars/1-car-image.png')}}" class="img-responsive slider-house" alt="slider image">
                <img src="{{asset('site_assets/images/home/slider/birds1.png')}}" class="slider-circle1" alt="slider image">
                <img src="{{asset('site_assets/images/home/slider/birds2.png')}}" class="slider-circle2" alt="slider image">

                <img src="{{asset('site_assets/images/home/slider/sun.png')}}" class="slider-cloud2" alt="slider image">

                <img src="{{asset('site_assets/images/home/slider/house.png')}}" class="slider-cycle" alt="">
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>
    <!--/#home-slider-->

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <i class="fa fa-car fa-2x"></i>
                        </div>
                        <h2>Car Rental On Demand</h2>

                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <i class="fa fa-file fa-2x"></i>
                        </div>
                        <h2>Fatser Booking System</h2>

                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <i class="fa fa-connectdevelop fa-2x"></i>
                        </div>
                        <h2>CountryWide Support</h2>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#services-->

    <section id="action" class="responsive">
        <div class="vertical-center">
            <div class="container">
                <div class="row">
                    <div class="action take-tour">
                        <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h1 class="title">Help Base</h1>
                            <p>We are 24/7 ready for support</p>
                        </div>
                        <div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="tour-button">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#action-->

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="text-center">
                    @foreach($extra as $extra)
                        <strong>{{$extra->about}}</strong>
                    @endforeach
                </div>
            </div>
            </div>
        </div>
    </section>
    <!--/#features-->



@stop