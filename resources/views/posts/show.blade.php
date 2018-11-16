@extends('layouts.app')
@section('meta')
<meta property="og:title" content="{{$post->title}}">
<meta property="og:type" content="article">
<meta property="og:url" content="{{URL::current()}}">
<meta property="og:site_name" content="{{env('APP_NAME')}}">
<meta property="og:description" content="{{$post->description}}">
<meta property="og:image" content="{{asset($post->cover)}}">
@endsection
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