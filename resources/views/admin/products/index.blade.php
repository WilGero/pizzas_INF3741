@extends('adminlte::page')
@section('title', 'Pizzas Andrews')
@include('flash::message')

@section('content')
<div class="form-group row"><div class="col-sm-8"></div></div>
<div class="container">
    
    <div class="row justify-content-center">
        <p><a href="{{ route('products.create') }}" class="btn btn-primary">Registrar nuevo producto</a></p>
    </div>
        <div class="card">
            <div class="card-header">{{ __('Productos') }}</div>         
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Descripción</th>
                            <th>Cantidad</th>
                            <th>Costo</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <div hidden>
                                @php
                                $cantidad = 0
                                @endphp
                                @foreach($product->orders as $order)
                                    {{ $cantidad = $cantidad + $order->pivot->amount}}
                                @endforeach
                            </div>
                            <div hidden>
                                @php
                                $total = 0
                                @endphp
                                @foreach($product->supplies as $supplie)
                                    {{ $total = $total + $supplie->pivot->amount * $supplie->price }}
                                @endforeach
                            </div>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }} Bs</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $cantidad }}</td>
                            <td>{{ $total }} Bs</td>
                            <td>
                                
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Editar</a>
                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-secondary">Detalles</a>
                                <!--<a href="{{ route('products.destroy', $product->id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger">Eliminar</a> 
                                -->
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>    
</div>

@endsection