<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{asset('/assets/css/layout/_header.css')}}">
        <link rel="stylesheet" href="{{asset('/assets/css/layout/_footer.css')}}">
        <link rel="stylesheet" href="{{asset('/assets/css/layout/_main.css')}}">
        <link rel="stylesheet" href="{{asset('/assets/css/tools:style/_reset.css')}}">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <script src="{{asset('/assets/javascript/jquery-3.5.1.min.js')}}"></script>
        @yield('pageCss')
        @yield('pageJs')
    </head>
    <body>
        <div class="wrap">
            @yield('header')
            <div class="p-main">
                @yield('content')
            </div>
            @yield('footer')
        </div>
    </body>
</html>
