<!DOCTYPE html>
<html>
    <head>
        <title>RentIt</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-kerning: normal;
                color:#fff ;
            }
            .wallpaper{
                font-size: 96px;
                background: url("https://unsplash.it/900/?random") ;
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;

            }
            .btn{
                border-radius: 11%;
                border-color: #00c5de;
                background-color: #00c5de;
                padding: 2%;
                color: #fff;
                text-align: center;
                font-size: 0.2em;
                font-weight: 900;
                text-decoration: none;

            }
             a:hover{
               transition: background-color 5s ease;
                 -moz-transition: background-color 0.5s ease;
                 -webkit-transition: background-color 0.5s ease;
                 -o-transition: background-color 0.5s ease;
                 background-color: #fff;
                 color:#00c5de;
            }
        </style>
    </head>
    <body>
        <div class="container wallpaper">
            <div class="content ">
                <div class="title">

                    <h2>RentIt System</h2>
                   <a href="{{url('admin/')}}" class="btn">Admin Panel</a>
                    <br>
                    <small>Developed By : Frost Mango</small>

                </div>
            </div>
        </div>
    </body>
</html>
