@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row py-4">
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
    <div class="row">
        <div class="col-md-12">
            <h2 class="title">Mezclas</h2>
        </div>
        <div class="col-md- d-none d-sm-block">
            <div class="embed-responsive embed-responsive-21by9">
                <canvas class="embed-responsive-item prices"></canvas>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card text-white bg-dark mb-3">
                <div class="card-body">
                    <div class="row">
                        @foreach($classifications as $classification)
                        <div class="col-sm-4 text-center">
                            <h5 class="card-title title">{{$classification->classification}}</h5>
                            <p class="card-text">{{$classification->prices->first()->price}} USD</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2 class="title">Divisas</h2>
        </div>
        @foreach($currencies as $currency)
        <div class="col-md-4">
            <div class="card text-dark bg-warning mb-3">
                <div class="card-header title">{{$currency->sign}} {{$currency->currency}}</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 text-center">
                            <h5 class="card-title title">Compra</h5>
                            <p class="card-text">{{$currency->exchanges->first()->buy}} MXN</p>
                        </div>
                        <div class="col-6 text-center">
                            <h5 class="card-title title">Venta</h5>
                            <p class="card-text">{{$currency->exchanges->first()->sell}} MXN</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card bg-dark text-white text-center">
                <div class="card-body">
                    <h3 class="card-title title">VENTA Y SERVICIO</h3>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            Producto garantizado de acuerdo a normas internacionales
                        </li>
                        <li class="list-inline-item">
                            Entregas exactas y a tiempo
                        </li>
                        <li class="list-inline-item">
                            Autotransportes modernos y personal capacitado
                        </li>
                        <li class="list-inline-item">
                            Suministro por vìa terrestre, férrea y marítima
                        </li>
                        <li class="list-inline-item">
                            Carga asegurada y monitoreada vìa satélite
                        </li>
                        <li class="list-inline-item">
                            Unidades con equipo de seguridad y contra incendio
                        </li>
                        <li class="list-inline-item">
                            Entrega de documentación arancelaria y de importación, asì como certificado de composición química del producto
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2 class="title">Soluciones</h2>
        </div>
        @foreach($solutions as $solution)
        <div class="col-md-4 d-flex align-items-stretch py-2">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title title">{{$solution->solution}}</h4>
                    <p class="card-text">{{$solution->description}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
@section('js')
<script>
    var chart
    var dataset = {
        labels: [],
        datasets: [{
            label: '',
            data: [],
            backgroundColor: [

            ],
            borderColor: [
            ],
            borderWidth: 1
        }]
    }
    $(document).ready(function () {
        chart = new Chart($(".prices"), {
            type: 'bar',
            data: dataset
        });
    })
</script>
@foreach($classifications as $classification)
<script>
    dataset.labels.push("{{$classification->classification}}")
    dataset.datasets[0].data.push("{{$classification->prices->first()->price}}")
</script>
@endforeach
@endsection