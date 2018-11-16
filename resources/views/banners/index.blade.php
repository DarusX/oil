@extends('dashboard')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="title">Banners</h1>
    </div>
    @foreach($banners as $banner)
    <div class="col-md-3">
        <div class="card">
            <img class="card-img-top" src="{{asset($banner->banner)}}" alt="">
            <div class="card-body">
                <p class="card-text"><strong>Expiración:</strong> <i>{{$banner->expiration->format('Y-m-d')}}</i></p>
                <a href="{{route('banners.destroy', $banner)}}" class="btn btn-sm btn-danger destroy" data-toggle="tooltip"
                    data-placement="top" title="Eliminar"><i class="fas fa-trash"></i></a>
                <a href="{{route('banners.edit', $banner)}}" class="btn btn-sm btn-warning" data-toggle="tooltip"
                    data-placement="top" title="Editar"><i class="fas fa-pen"></i></a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection