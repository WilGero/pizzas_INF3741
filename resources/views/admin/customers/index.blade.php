@extends('adminlte::page')
@section('title', 'Pizzas Andrews')
@include('flash::message')

@section('content')
    
    <div class="row justify-content-center">
        <p><a href="{{ route('customers.create') }}" class="btn btn-primary">Registrar nuevo cliente</a></p>
    </div>
    <div class="container">        
        <div class="card">
            <div class="card-header">{{ __('Clientes') }}</div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Telefono</th>
                            <th>Direccion</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $customer)
                        <tr>
                            <td>{{ $customer->id }}</td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->surname }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td>{{ $customer->direction }}</td>
                            <td>
                                <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-warning">Editar</a>
                                <a href="{{ route('customers.destroy', $customer->id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
        </div>
    </div>

@endsection