@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="title">Role</h1>
        <form action="{{route('roles.store')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="">Role</label>
                <input type="text" name="role" class="form-control" required>
            </div>
            @foreach($modules as $module)
            <div class="form-group">
                <legend>{{$module->module}}</legend>
                @foreach($module->privileges as $privilege)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="privilege{{$privilege->id}}" name="privilege_id[]" value="{{$privilege->id}}">
                    <label class="form-check-label" for="privilege{{$privilege->id}}">{{$privilege->privilege}}</label>
                </div>
                @endforeach
            </div>
            @endforeach
            <div class="form-group">
                <button type="submit" class="btn btn-warning">Guardar</button>
            </div>
        </form>
    </div>
</div>
@endsection