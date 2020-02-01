<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Bonhomie') }}</title>
    <link rel="icon" href="img/strong.png">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:900i|Varela+Round&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="{{ asset('css/index.css')}}">
    <script src="https://kit.fontawesome.com/4763e7c55e.js" crossorigin="anonymous"></script>
<body>
    @yield('content')
</body>
</html>