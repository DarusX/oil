<div class="btn-group dropright btn-block">
    <button type="button" class="btn btn-dark btn-block dropdown-toggle" data-toggle="dropdown" aria-haspopup="true">
        Posts
    </button>
    <div class="dropdown-menu">
        <a href="{{route('posts.create')}}" class="dropdown-item"><i class="fas fa-pen-alt"></i> Escribir</a>
    </div>
</div>
<div class="btn-group dropright btn-block">
    <button type="button" class="btn btn-dark btn-block dropdown-toggle" data-toggle="dropdown" aria-haspopup="true">
        Banners
    </button>
    <div class="dropdown-menu">
        <a href="{{route('banners.create')}}" class="dropdown-item"><i class="fas fa-image"></i> Cargar</a>
        <a href="{{route('banners.index')}}" class="dropdown-item"><i class="fas fa-images"></i> Galería</a>
    </div>
</div>