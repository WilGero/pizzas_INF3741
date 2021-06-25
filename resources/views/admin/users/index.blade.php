@extends('adminlte::page')
@section('title', 'Pizzas Andrews')
@include('flash::message')

@section('content')
<div class="form-group row"><div class="col-sm-8"></div></div>
    <div class="row justify-content-center">
        <p><a href="{{ route('users.create') }}" class="btn btn-primary">Registrar nuevo usuario</a></p>
    </div>
    <div class="container">        
        <div class="card">
            <div class="card-header">{{ __('Usuarios') }}</div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Rol</th>
                            <th>Tipo</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>
                                @if($user->type == "administración")
                                    <a class="btn btn-success">{{ $user->type }}</a>
                                @else
                                    <a class="btn btn-primary">{{ $user->type }}</a>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Editar</a>
                                <a href="{{ route('users.destroy', $user->id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
        </div>
    </div>

@endsection