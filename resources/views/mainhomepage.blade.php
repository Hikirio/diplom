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
            background-color: #fff;
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
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        .center{
            align-items: unset;
            display: flex;
            justify-content: center;

        }
    </style>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#menu").on("click","a", function (event) {
                event.preventDefault();
                var id  = $(this).attr('href'),
                    top = $(id).offset().top;
                $('body,html').animate({scrollTop: top}, 1500);
            });
        });
    </script>
</head>
<body>

<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
               <small>Уже зарегестрирован? тебе сюда -></small> <a href="{{ route('login') }}">Вход</a>

                {{--@if (Route::has('register'))--}}
                    {{--<a href="{{ route('register') }}">Register</a>--}}
                {{--@endif--}}
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Laravel
        </div>

        <div class="links">
            <a href="{{ url('/register') }}">Разместить резюме как разработчик</a>
            <a href="{{ url('/') }}">Найти разработчика</a>
            <nav id="menu">
                <ul>
                    <a href="#yak1">О проекте</a><br>
                    <a href="#yak2">1655</a> <br>
                </ul>
            </nav>
        </div>
    </div>
</div>

<div id="yak1" class="position-ref full-height" style="background-color: aquamarine">
<div class="center" style="color: brown ;"> О нас</div>
</div>

<div class="flex-center position-ref full-height" id="yak2">1655</div>
</body>
</html>
