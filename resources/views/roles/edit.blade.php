@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="title">{{$role->role}}</h1>
    </div>
    <div class="col-md-12">
        <form action="{{route('roles.update', $role)}}" method="post">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="form-group">
                <label for="">Role</label>
                <input type="text" class="form-control" name="role" value="{{$role->role}}">
            </div>
            @foreach($modules as $module)
            <div class="form-group">
                <legend>{{$module->module}}</legend>
                @foreach($module->privileges as $privilege)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="privilege{{$privilege->id}}" name="privilege_id[]" value="{{$privilege->id}}" {{($role->privileges->contains($privilege))?'checked':''}}>
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