@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="title">{{$user->name}}</h1>
    </div>
    <div class="col-md-12">
        <form action="{{route('users.update', $user)}}" method="post">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="name" class="form-control" value="{{$user->name}}">
            </div>
            <div class="form-group">
                <label for="">Usuario</label>
                <input type="text" name="username" class="form-control" value="{{$user->username}}">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="text" name="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Role</label>
                <select name="role_id" class="form-control">
                    @foreach($roles as $role)
                    <option value="{{$role->id}}" {{($user->role == $role)?'selected':''}}>{{$role->role}}</option>
                    @endforeach
                </select>
            </div>
        </form>
    </div>
</div>
@endsection