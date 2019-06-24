<!DOCTYPE html>
<html lang="{{ config('app.locale')}}">
 

<head>
    <meta charset="utf-8">
    <meta http-eqiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>maBourse</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <!--
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    -->
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="{{ asset('js/header.js') }}" defer></script>
    <!-- if statement -->
    @if(request()->is('/'))
        <script src="{{ asset('js/index.js') }}" defer></script>
    @elseif(request()->is('candidature'))
        <script src="{{ asset('js/candidature.js') }}" defer></script>
    @endif
        
    <script src="{{ asset('js/bs-stepper.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bs-stepper.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body class="d-flex flex-column h-100">
    
    @include('layouts.header')

    <main id="app" role="main" class="flex-shrink-0 content">
        <div id="page-content">
            @yield('content')
        </div>
    </main>

    @include('layouts.footer')
    
</body>

</html>