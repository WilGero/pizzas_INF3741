@extends('adminlte::page')
@section('title', 'Pizzas Andrews')
@include('flash::message')

@section('content')
<div class="form-group row"><div class="col-sm-8"></div></div>
<div class="container">
    
    <div class="row justify-content-center">
        <p><a href="{{ route('orders.create') }}" class="btn btn-primary">Registrar nuevo pedido</a></p>
    </div>
        <div class="card">
            <div class="card-header">{{ __('Pedidos') }}</div>         
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Usuario</th>
                            <th>Cliente</th>
                            <th>Precio Total</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <div hidden>
                                @php
                                $total = 0
                                @endphp
                                @foreach($order->products as $product)
                                    {{ $total = $total + $product->pivot->amount * $product->price }}
                                @endforeach
                            </div>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->user->name }}</td>
                            <td>{{ $order->customer->name }}</td>
                            <td>{{ $total }} Bs</td>
                            <td>
                                <a href="{{ route('orders.show', $order->id) }}" class="btn btn-success">Detalles</a>
                                <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning">Editar</a>
                                <!--<a href="{{ route('orders.destroy', $order->id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger">Eliminar</a> 
                                -->
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>    
</div>

@endsection