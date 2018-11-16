@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="title">Usuarios</h1>
    </div>
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th class="py-0">Usuario</th>
                    <th class="py-0">Nombre</th>
                    <th class="py-0">Role</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td class="py-0">{{$user->username}}</td>
                    <td class="py-0">{{$user->name}}</td>
                    <td class="py-0">{{$user->role->role}}</td>
                    <td>
                        <a href="{{route('users.destroy', $user)}}" class="btn btn-sm btn-danger destroy"><i class="fas fa-trash"></i></a>
                        <a href="{{route('users.edit', $user)}}" class="btn btn-sm btn-dark destroy"><i class="fas fa-pen"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection