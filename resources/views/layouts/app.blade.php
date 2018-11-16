<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div id="app">
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{asset('resources/banner.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-12">
                        @include('layouts.navbar')
                    </div>
                    <div class="col-md-12">
                    </div>
                </div>
            </div>
            @yield('content')
            <div class="container px-0">
                <div class="row bg-dark text-white" style="margin-left: 15px; margin-right: 15px">
                    @include('layouts.footer')
                </div>
            </div>
        </main>
    </div>
    @yield('js')
</body>
</html>