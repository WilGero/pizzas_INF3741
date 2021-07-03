@extends('adminlte::page')
@section('title', 'Pizzas Andrews')
@include('flash::message')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="card">
                <div class="card-header">{{ __('Detalles pedido') }}</div>

                <div class="card-body">

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Cliente') }}</label>
                            <div class="col-md-6">
                                <label class="form-control">{{ $order->customer->name }}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Fecha/Hora') }}</label>
                            <div class="col-md-6">
                                <label class="form-control">{{ $order->created_at }}</label>
                            </div>
                        </div>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($order->products as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->pivot->amount }}</td>
                                    <td>{{ $product->pivot->amount * $product->price }} Bs</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div hidden>
                            @php
                                $total = 0
                            @endphp
                            @foreach($order->products as $product)
                                {{ $total = $total + $product->pivot->amount * $product->price }}
                            @endforeach
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Total') }}</label>
                            <div class="col-md-3">
                                <label class="form-control">{{ $total }} Bs</label>
                                <a class="btn btn-secondary" href="{{ route('orders.index') }}" role="button">Cancelar</a>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection