<!DOCTYPE html>
<html lang="{{ config('app.locale')}}">
 

<head>
    <meta charset="utf-8">
    <meta http-eqiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>maBourse</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    
    <script src="{{ asset('js/app.js') }}" defer></script>
    @if (request()->session()->get('isConnected') == 'true')
        <script src="{{ asset('js/candidature.js') }}" defer></script>
    @endif
    
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('css/bs-stepper.min.css') }}">
    <script src="{{ asset('js/bs-stepper.min.js') }}"></script>

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

