<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Body Weight Logging | @yield('title')</title>

        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/jquery-ui.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/jquery.datetimepicker.css') }}">
    </head>
    <body>
        <div class="container" style="margin-top:20px;">
            @yield('content')

            <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
            <script type="text/javascript" src="{{ URL::asset('js/jquery-ui.min.js') }}"></script>
            <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
            @yield('script')
        </div>
    </body>
</html>
