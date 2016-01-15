@extends('login-layout')

@section('auth-section')
    <div id="login-page">
        <div class="container">

            <form class="form-login" method="POST" action="/auth/register ">
                {!! csrf_field() !!}

                <h2 class="form-login-heading">sign up now</h2>
                <div class="login-wrap">
                    <input type="text" name="name" class="form-control" placeholder="Name" autofocus>
                    <br>
                    <input type="email" name="email" class="form-control" placeholder="email@email.com" >
                    <br>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <br>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" >
                    <br>

                    <br>
                    <button class="btn btn-theme btn-block"  type="submit"><i class="fa fa-lock"></i> SIGN UP</button>

                    <hr>




                </div>



            </form>




        </div>
    </div>


    <!-- resources/views/auth/login.blade.php -->


@stop