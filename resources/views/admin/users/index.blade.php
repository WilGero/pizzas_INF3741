@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="" class="btn btn-success">Registrar nuevo usuario</a>
            <div class="card">
                <div class="card-header">{{ __('Usuarios') }}</div>
            
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Rol</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td scope="col">{{ $user->id }}</td>
                            <td scope="col">{{ $user->name }}</td>
                            <td scope="col">{{ $user->surname }}</td>
                            <td scope="col">{{ $user->email }}</td>
                            <td scope="col">{{ $user->role }}</td>
                            <td scope="col">{{ $user->type }}</td>
                            <td scope="col"><a href="" class="btn btn-danger"></a> <a href="" class="btn btn-warning"></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $users->render() !!}

            </div>
        </div>
    </div>
</div>
@endsection