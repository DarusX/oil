@extends('dashboard')
@section('content')
<h1 class="title">Banner</h1>
<form action="{{route('banners.store')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group">
        <label for="">Banner</label>
        <input type="file" name="banner" class="form-control file-form-control {{($errors->has('banner'))?'is-invalid':''}}">
        <small class="text-danger">1200x628</small>
        @if($errors->has('banner'))
        <div class="invalid-feedback">
            <span>{{$errors->first('banner')}}</span>
        </div>
        @endif
    </div>
    <div class="form-group">
        <label for="">Expiración</label>
        <input type="text" name="expiration" class="form-control datepicker {{($errors->has('expiration'))?'is-invalid':''}}"
            value="{{old('expiration')}}" readonly>
        @if($errors->has('expiration'))
        <div class="invalid-feedback">
            <span>{{$errors->first('expiration')}}</span>
        </div>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-warning">Aceptar</button>
    </div>
</form>
@endsection
@section('js')
<script>
    $(document).ready(function () {
        $(".datepicker").datepicker({
            dateFormat: "yy-mm-dd",
            minDate: 0
        })
    })
</script>
@endsection