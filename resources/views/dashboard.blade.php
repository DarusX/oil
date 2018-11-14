@extends('layouts.app')

@section('content')
<div class="container-fluid" style="min-height: 100vh;">
    <div class="row" style="min-height: 100vh">
        <div class="col-md-2 px-0 bg-dark" style="min-height: 100vh">
            @include('layouts.sidebar')
        </div>
        <div class="col-md-10">
            @yield('workspace')
        </div>
    </div>
</div>
@endsection
@section('js')
@endsection
