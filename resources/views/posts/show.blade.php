@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="title">{{$post->title}}</h1>
        </div>
        <div class="col-md-12">
            <img src="{{asset($post->cover)}}" alt="" class="img-fluid">
        </div>
        <div class="col-md-12">
            <p><i>{{$post->description}}</i></p>
        </div>
        <div class="col-md-12">
            {!!$post->post!!}
        </div>
    </div>
</div>
@endsection