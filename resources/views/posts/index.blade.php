@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        @foreach($posts as $post)
        <div class="col-md-12 pb-4">
            <div class="card">
                <img class="card-img-top" src="{{asset($post->cover)}}" alt="{{$post->description}}">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->description}}</p>
                    <a href="{{route('posts.show', $post)}}" class="btn btn-warning">Continuar leyendo...</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection