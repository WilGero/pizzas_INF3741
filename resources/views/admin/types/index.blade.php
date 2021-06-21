@extends('adminlte::page')
@section('title', 'Pizzas Andrews')
@include('flash::message')

@section('content')

<div class="container">
    
    <div class="row justify-content-center">
        <p><a href="{{ route('types.create') }}" class="btn btn-primary">Registrar nuevo tipo</a></p>
    </div>
        <div class="card">
            <div class="card-header">{{ __('Tipos') }}</div>         
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tipo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($types as $type)
                        <tr>
                            <td>{{ $type->id }}</td>
                            <td>{{ $type->type }}</td>
                            <td>
                                <a href="{{ route('types.edit', $type->id) }}" class="btn btn-warning">Editar</a>
                                <a href="{{ route('types.destroy', $type->id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger">Eliminar</a> 
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>    
</div>

@endsection