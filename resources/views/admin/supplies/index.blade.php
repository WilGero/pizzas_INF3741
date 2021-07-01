@extends('adminlte::page')
@section('title', 'Pizzas Andrews')
@include('flash::message')

@section('content')
<div class="form-group row"><div class="col-sm-8"></div></div>
<div class="container">
    
    <div class="row justify-content-center">
        <p><a href="{{ route('supplies.create') }}" class="btn btn-primary">Registrar nuevo insumo</a></p>
    </div>
        <div class="card">
            <div class="card-header">{{ __('Insumos') }}</div>         
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Costo</th>
                            <th>Descripción</th>
                            <th>Cantidad</th>
                            <th>Costo Total</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($supplies as $supplie)
                        <tr>
                            <div hidden>
                                @php
                                $cantidad = 0
                                @endphp
                                @foreach($supplie->products as $product)
                                    {{ $cantidad = $cantidad + $product->pivot->amount}}
                                    @foreach($product->orders as $order)
                                        {{ $cantidad = $cantidad * $order->pivot->amount}}
                                    @endforeach    
                                @endforeach
                            </div>
                            <div hidden>
                                @php
                                $total = 0
                                @endphp
                                @foreach($supplie->products as $product)
                                    {{ $total = $total + $product->pivot->amount}}
                                    @foreach($product->orders as $order)
                                        {{ $total = $total * $order->pivot->amount * $supplie->price}}
                                    @endforeach    
                                @endforeach
                            </div>
                            <td>{{ $supplie->id }}</td>
                            <td>{{ $supplie->name }}</td>
                            <td>{{ $supplie->price }} Bs</td>
                            <td>{{ $supplie->description }}</td>
                            <td>{{ $cantidad }}</td>
                            <td>{{ $total }} Bs</td>
                            <td>
                                <a href="{{ route('supplies.edit', $supplie->id) }}" class="btn btn-warning">Editar</a>
                                <a href="{{ route('supplies.destroy', $supplie->id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger">Eliminar</a> 
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>    
</div>

@endsection