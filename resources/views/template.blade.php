
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ERS</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Latest compiled Bootstrap JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body>
    <div>

    </div>
    <div class="wrapper content ">

        @include('menu')
        <div class="header">
            <img src="{{asset('img/logo.png')}}" alt="Logo" style="width: 70%; height: auto">
        </div>
        @yield('content')

        <div id="footer">
            Copyright by &copy Adrian Ochała & Dawid Szmidt & Szymon Wójcik
        </div>
    </div>
    </body>
</html>
