@extends('dashboard')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="title">Privilegio</h1>
        <form action="{{route('privileges.store')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="">Privilegio</label>
                <input type="text" name="privilege" class="form-control" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-warning">Guardar</button>
            </div>
        </form>
    </div>
</div>
@endsection