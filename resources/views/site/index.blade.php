@extends('site-layout')


@section('content')

<!-- Navigation
================================================== -->

<nav class="navbar navbar-dark bg-inverse bg-inverse-custom navbar-fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <span class="icon-logo"></span>
            <span class="sr-only">Land.io</span>
        </a>
        <a class="navbar-toggler hidden-md-up pull-xs-right" data-toggle="collapse" href="#collapsingNavbar" aria-expanded="false" aria-controls="collapsingNavbar">
            &#9776;
        </a>
        <a class="navbar-toggler navbar-toggler-custom hidden-md-up pull-xs-right" data-toggle="collapse" href="#collapsingMobileUser" aria-expanded="false" aria-controls="collapsingMobileUser">
            <span class="icon-user"></span>
        </a>
        <div id="collapsingNavbar" class="collapse navbar-toggleable-custom" role="tabpanel" aria-labelledby="collapsingNavbar">
            <ul class="nav navbar-nav pull-xs-right">
                <li class="nav-item nav-item-toggable">
                    <a class="nav-link" href="./index-carousel.html"><small>NEW</small> Slides<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item nav-item-toggable">
                    <a class="nav-link" href="ui-elements.html">UI Kit</a>
                </li>
                <li class="nav-item nav-item-toggable">
                    <a class="nav-link" href="https://github.com/tatygrassini/landio-html" target="_blank">GitHub</a>
                </li>
                <li class="nav-item nav-item-toggable hidden-md-up">
                    <form class="navbar-form">
                        <input class="form-control navbar-search-input" type="text" placeholder="Type your search &amp; hit Enter&hellip;">
                    </form>
                </li>
                <li class="navbar-divider hidden-sm-down"></li>
                <li class="nav-item dropdown nav-dropdown-search hidden-sm-down">
                    <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="icon-search"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-search" aria-labelledby="dropdownMenu1">
                        <form class="navbar-form">
                            <input class="form-control navbar-search-input" type="text" placeholder="Type your search &amp; hit Enter&hellip;">
                        </form>
                    </div>
                </li>
                <li class="nav-item dropdown hidden-sm-down textselect-off">
                    <a class="nav-link dropdown-toggle nav-dropdown-user" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{asset('assets/img/face5.jpg')}}" height="40" width="40" alt="Avatar" class="img-circle"> <span class="icon-caret-down"></span>

                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-user dropdown-menu-animated" aria-labelledby="dropdownMenu2">
                        <div class="media">
                            <div class="media-left">
                                <img src="{{asset('assets/img/face5.jpg')}}" height="60" width="60" alt="Avatar" class="img-circle">
                            </div>
                            <div class="media-body media-middle">
                                <h5 class="media-heading">Joel Fisher</h5>
                                <h6>hey@joelfisher.com</h6>
                            </div>
                        </div>
                        <a href="#" class="dropdown-item text-uppercase">View posts</a>
                        <a href="#" class="dropdown-item text-uppercase">Manage groups</a>
                        <a href="#" class="dropdown-item text-uppercase">Subscription &amp; billing</a>
                        <a href="#" class="dropdown-item text-uppercase text-muted">Log out</a>
                        <a href="#" class="btn-circle has-gradient pull-xs-right">
                            <span class="sr-only">Edit</span>
                            <span class="icon-edit"></span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
        <div id="collapsingMobileUser" class="collapse navbar-toggleable-custom dropdown-menu-custom p-x-1 hidden-md-up" role="tabpanel" aria-labelledby="collapsingMobileUser">
            <div class="media m-t-1">
                <div class="media-left">
                                                                                                                                                <<<<<<< HEAD
                    <img src="{{asset('assets/img/face5.jpg')}}" height="60" width="60" alt="Avatar" class="img-circle">
                </div>
                <div class="media-body media-middle">
                    <h5 class="media-heading">Joel Fisher</h5>
                    <h6>hey@joelfisher.com</h6>
                </div>
            </div>
            <a href="#" class="dropdown-item text-uppercase">View posts</a>
            <a href="#" class="dropdown-item text-uppercase">Manage groups</a>
            <a href="#" class="dropdown-item text-uppercase">Subscription &amp; billing</a>
            <a href="#" class="dropdown-item text-uppercase text-muted">Log out</a>
            <a href="#" class="btn-circle has-gradient pull-xs-right m-b-1">
                <span class="sr-only">Edit</span>
                <span class="icon-edit"></span>
            </a>
        </div>
    </div>
</nav>

<!-- Hero Section
================================================== -->

<header class="jumbotron bg-inverse text-xs-center center-vertically" role="banner">
    <div class="container">
        <h1 class="display-3">Rent It</h1>
        <h2 class="m-b-3">Craft your journey .</h2>
        <a class="btn btn-secondary-outline m-b-1" href="{{url('admin')}}" role="button">Login Here</a>
        <ul class="nav nav-inline social-share">
            <li class="nav-item"><a class="nav-link" href="#"><span class="icon-twitter"></span> 1024</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><span class="icon-facebook"></span> 562</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><span class="icon-linkedin"></span> 356</a></li>
        </ul>
    </div>
</header>

<!-- Intro
================================================== -->

<section class="section-intro bg-faded text-xs-center">
    <div class="container">
        <h3 class="wp wp-1">Build your beautiful UI, the way you want it, with Land.io</h3>
        <p class="lead wp wp-2">Craft memorable, emotive experiences with our range of beautiful UI elements.</p>
        <img src="{{asset('assets/img/mock.png')}}" alt="iPad mock" class="img-fluid wp wp-3">
    </div>
</section>

<!-- Features
================================================== -->

<section class="section-features text-xs-center">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-block">
                        <span class="icon-pen display-1"></span>
                        <h4 class="card-title">250</h4>
                        <h6 class="card-subtitle text-muted">UI Elements</h6>
                        <p class="card-text">Sed risus feugiat fusce eu sit conubia venenatis aliquet nisl cras eu adipiscing ac cras at sem cras per senectus eu parturient quam.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-block">
                        <span class="icon-thunderbolt display-1"></span>
                        <h4 class="card-title">Ultra</h4>
                        <h6 class="card-subtitle text-muted">Modern design</h6>
                        <p class="card-text">Sed risus feugiat fusce eu sit conubia venenatis aliquet nisl cras eu adipiscing ac cras at sem cras per senectus eu parturient quam.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card m-b-0">
                    <div class="card-block">
                        <span class="icon-heart display-1"></span>
                        <h4 class="card-title">Free</h4>
                        <h6 class="card-subtitle text-muted">Forever and ever</h6>
                        <p class="card-text">Sed risus feugiat fusce eu sit conubia venenatis aliquet nisl cras eu adipiscing ac cras at sem cras per senectus eu parturient quam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Video
================================================== -->

<section class="section-video bg-inverse text-xs-center wp wp-4">
    <h3 class="sr-only">Video</h3>
    <video id="demo_video" class="video-js vjs-default-skin vjs-big-play-centered" controls poster="{{asset('assets/img/video-poster.jpg')}}" data-setup='{}'>
        <source src="http://vjs.zencdn.net/v/oceans.mp4" type='video/mp4'>
        <source src="http://vjs.zencdn.net/v/oceans.webm" type='video/webm'>
    </video>
</section>

<!-- Pricing
================================================== -->

<section class="section-pricing bg-faded text-xs-center">
    <div class="container">
        <h3>Manage your subscriptions</h3>
        <div class="row p-y-3">
            <div class="col-md-4 p-t-md wp wp-5">
                <div class="card pricing-box">
                    <div class="card-header text-uppercase">
                        Personal
                    </div>
                    <div class="card-block">
                        <p class="card-title">Sed risus feugiat fusce eu sit conubia venenatis aliquet nisl cras.</p>
                        <h4 class="card-text">
                            <sup class="pricing-box-currency">$</sup>
                            <span class="pricing-box-price">19</span>
                            <small class="text-muted text-uppercase">/month</small>
                        </h4>
                    </div>
                    <ul class="list-group list-group-flush p-x">
                        <li class="list-group-item">Sed risus feugiat</li>
                        <li class="list-group-item">Sed risus feugiat fusce eu sit</li>
                        <li class="list-group-item">Sed risus feugiat fusce</li>
                    </ul>
                    <a href="#" class="btn btn-primary-outline">Get Started</a>
                </div>
            </div>
            <div class="col-md-4 stacking-top">
                <div class="card pricing-box pricing-best p-x-0">
                    <div class="card-header text-uppercase">
                        Professional
                    </div>
                    <div class="card-block">
                        <p class="card-title">Sed risus feugiat fusce eu sit conubia venenatis aliquet nisl cras.</p>
                        <h4 class="card-text">
                            <sup class="pricing-box-currency">$</sup>
                            <span class="pricing-box-price">49</span>
                            <small class="text-muted text-uppercase">/month</small>
                        </h4>
                    </div>
                    <ul class="list-group list-group-flush p-x">
                        <li class="list-group-item">Sed risus feugiat</li>
                        <li class="list-group-item">Sed risus feugiat fusce eu sit</li>
                        <li class="list-group-item">Sed risus feugiat fusce</li>
                        <li class="list-group-item">Sed risus feugiat</li>
                    </ul>
                    <a href="#" class="btn btn-primary">Get Started</a>
                </div>
            </div>
            <div class="col-md-4 p-t-md wp wp-6">
                <div class="card pricing-box">
                    <div class="card-header text-uppercase">
                        Enterprise
                    </div>
                    <div class="card-block">
                        <p class="card-title">Sed risus feugiat fusce eu sit conubia venenatis aliquet nisl cras.</p>
                        <h4 class="card-text">
                            <sup class="pricing-box-currency">$</sup>
                            <span class="pricing-box-price">99</span>
                            <small class="text-muted text-uppercase">/month</small>
                        </h4>
                    </div>
                    <ul class="list-group list-group-flush p-x">
                        <li class="list-group-item">Sed risus feugiat</li>
                        <li class="list-group-item">Sed risus feugiat fusce eu sit</li>
                        <li class="list-group-item">Sed risus feugiat fusce</li>
                    </ul>
                    <a href="#" class="btn btn-primary-outline">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials
================================================== -->

<section class="section-testimonials text-xs-center bg-inverse" ng-controller="carsController">
    <div class="container">
        <h3 class="sr-only">Testimonials</h3>
        <div id="carousel-testimonials" class="carousel slide" data-ride="carousel" data-interval="0">


            <div class="carousel-inner" role="listbox" ng-repeat="car in cars">

                <div class="carousel-item active">
                    <blockquote class="blockquote">
                        <img src="{{asset('assets/img/face1.jpg')}}" height="80" width="80" alt="Avatar" class="img-circle">
                        <p class="h3">{[{ car.name }]}</p>
                        <footer>{[{ car.class }]}</footer>
                    </blockquote>
                </div>




            </div>
            <ol class="carousel-indicators">
                <li class="active"><img src="{{asset('assets/img/face1.jpg')}}" alt="Navigation avatar" data-target="#carousel-testimonials" data-slide-to="0" class="img-fluid img-circle"></li>
                <li><img src="{{asset('assets/img/face2.jpg')}}" alt="Navigation avatar" data-target="#carousel-testimonials" data-slide-to="1" class="img-fluid img-circle"></li>
                <li><img src="{{asset('assets/img/face3.jpg')}}" alt="Navigation avatar" data-target="#carousel-testimonials" data-slide-to="2" class="img-fluid img-circle"></li>
                <li><img src="{{asset('assets/img/face4.jpg')}}" alt="Navigation avatar" data-target="#carousel-testimonials" data-slide-to="3" class="img-fluid img-circle"></li>
                <li><img src="{{asset('assets/img/face5.jpg')}}" alt="Navigation avatar" data-target="#carousel-testimonials" data-slide-to="4" class="img-fluid img-circle"></li>
            </ol>
        </div>
    </div>
</section>

<!-- Text Content
================================================== -->

<section class="section-text">
    <div class="container">
        <h3 class="text-xs-center">Make your mark on the product industry</h3>
        <div class="row p-y-3">
            <div class="col-md-5">
                <p class="wp wp-7">A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>
            </div>
            <div class="col-md-5 col-md-offset-2 separator-x">
                <p class="wp wp-8">A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>
            </div>
        </div>
    </div>
</section>

<!-- News
================================================== -->

<section class="section-news">
    <div class="container">
        <h3 class="sr-only">News</h3>
        <div class="bg-inverse">
            <div class="row">
                <div class="col-md-6 p-r-0">
                    <figure class="has-light-mask m-b-0 image-effect">
                        <img src="https://images.unsplash.com/photo-1442328166075-47fe7153c128?q=80&fm=jpg&w=1080&fit=max" alt="Article thumbnail" class="img-fluid">
                    </figure>
                </div>
                <div class="col-md-6 p-l-0">
                    <article class="center-block">
                        <span class="label label-info">Featured article</span>
                        <br>
                        <h5><a href="#">Design studio with product designer Peter Finlan <span class="icon-arrow-right"></span></a></h5>
                        <p class="m-b-0">
                            <a href="#"><span class="label label-default text-uppercase"><span class="icon-tag"></span> Design Studio</span></a>
                            <a href="#"><span class="label label-default text-uppercase"><span class="icon-time"></span> 1 Hour Ago</span></a>
                        </p>
                    </article>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-push-6 p-l-0">
                    <figure class="has-light-mask m-b-0 image-effect">
                        <img src="https://images.unsplash.com/photo-1434394673726-e8232a5903b4?q=80&fm=jpg&w=1080&fit=max" alt="Article thumbnail" class="img-fluid">
                    </figure>
                </div>
                <div class="col-md-6 col-md-pull-6 p-r-0">
                    <article class="center-block">
                        <span class="label label-info">Featured article</span>
                        <br>
                        <h5><a href="#">How bold, emotive imagery can connect with your audience <span class="icon-arrow-right"></span></a></h5>
                        <p class="m-b-0">
                            <a href="#"><span class="label label-default text-uppercase"><span class="icon-tag"></span> Design Studio</span></a>
                            <a href="#"><span class="label label-default text-uppercase"><span class="icon-time"></span> 1 Hour Ago</span></a>
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sign Up
================================================== -->

<section class="section-signup bg-faded">
    <div class="container">
        <h3 class="text-xs-center m-b-3">Sign up to receive free updates as soon as they hit!</h3>
        <form>
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="form-group has-icon-left form-control-name">
                        <label class="sr-only" for="inputName">Your name</label>
                        <input type="text" class="form-control form-control-lg" id="inputName" placeholder="Your name">
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="form-group has-icon-left form-control-email">
                        <label class="sr-only" for="inputEmail">Email address</label>
                        <input type="email" class="form-control form-control-lg" id="inputEmail" placeholder="Email address" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="form-group has-icon-left form-control-password">
                        <label class="sr-only" for="inputPassword">Enter a password</label>
                        <input type="password" class="form-control form-control-lg" id="inputPassword" placeholder="Enter a password" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Sign up for free!</button>
                    </div>
                </div>
            </div>
            <label class="c-input c-checkbox">
                <input type="checkbox" checked>
                <span class="c-indicator"></span> I agree to Land.io’s <a href="#">terms of service</a>
            </label>
        </form>
    </div>
</section>
@stop