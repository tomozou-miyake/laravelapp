<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #FFCCCC;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                width:100px;
                margin: 50px auto 0px;
                border: 1px solid #fff;
                padding: 20px 40px;
                color: #fff;
                border-radius: 3px;
                text-align: center;
                background-color: #fcc2c2;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .btn-square {
                width:100px;
                margin: 50px auto 0px;
                border: 1px solid #fff;
                padding: 20px 40px;
                color: #fff;
                border-radius: 3px;
                text-align: center;
                background-color: rgba(204, 255, 238, 0.2);
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="{{ url('/hello') }}">Enter</a>
                </div>
            </div>
        </div>
    </body>
</html>
