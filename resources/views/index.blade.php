@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="carouselIndex" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach($banners as $banner)
                    <li data-target="#carouselIndex" data-slide-to="{{$loop->index}}" class="{{($loop->first)?'active':''}}"></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach($banners as $banner)
                    <div class="carousel-item {{($loop->first)?'active':''}}">
                        <img class="d-block w-100" src="{{asset($banner->banner)}}" alt="">
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselIndex" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselIndex" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection