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
            <div class="card-header"><h3>{{ __('Usuarios') }}</h3></div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Puesto de Trabajo</th>
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
                            <td>
                                @if($user->role == "cajero")
                                    <span class="btn btn-warning">{{ $user->role }}</span>
                                @elseif($user->role == "elaborador")
                                    <span class="btn btn-info">{{ $user->role }}</span>
                                @elseif($user->role == "mesero")
                                    <span class="btn btn-success">{{ $user->role }}</span>
                                @else
                                    <span class="btn btn-danger">{{ $user->role }}</span>
                                @endif
                            </td>
                            <td>
                                @if($user->type == "miembro")
                                    <span class="btn btn-success">{{ $user->type }}</span>
                                @else
                                    <span class="btn btn-danger">{{ $user->type }}</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Editar</a>
                                <a href="{{ route('users.destroy', $user->id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-secondary">Eliminar</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
        </div>
    </div>

@endsection