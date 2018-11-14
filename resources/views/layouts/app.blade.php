<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('lib/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('lib/summernote/lang/summernote-es-ES.js') }}"></script>
    <script src="{{ asset('lib/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('lib/Chart/Chart.bundle.min.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/jquery-ui/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{ asset('lib/jquery-ui/jquery-ui.theme.min.css')}}">
</head>
<body>
    <div id="app">
        @include('layouts.navbar')
        <main>
            @yield('content')
        </main>
    </div>
    @yield('js')
    @if(Session::has('success'))
    <script>
        $(document).ready(function(){
            swal({
                type: "success",
                text: "{{Session::get('success')}}"
            })
        })
    </script>
    @endif
</body>
</html>
