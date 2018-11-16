@extends('layouts.dashboard')
@section('content')
<div class="row justify-content-md-center text-center">
    <div class="col-md-12">
        <img src="{{asset('resources/403.png')}}" alt="" class="img-fluid">
    </div>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function () {
        swal({
            type: "warning",
            text: "{{Lang::get('messages.unauthorized')}}"
        })
    })
</script>
@endsection