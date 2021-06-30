@extends('adminlte::page')
@section('title', 'Pizzas Andrews')
@include('flash::message')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Detalles producto') }}</div>

                <div class="card-body">

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                            <div class="col-md-3">
                                <label class="form-control">{{ $product->name }}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Precio') }}</label>
                            <div class="col-md-3">
                                <label class="form-control">{{ $product->price }}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descripcion') }}</label>
                            <div class="col-md-6">
                                <label class="form-control">{{ $product->description }}</label>
                            </div>
                        </div>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Insumo</th>
                                    <th>Cantidad</th>
                                    <th>Costo</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($product->supplies as $supplie)
                                <tr>
                                    <td>{{ $supplie->name }}</td>
                                    <td>{{ $supplie->pivot->amount }}</td>
                                    <td>{{ $supplie->pivot->amount * $supplie->price }} Bs</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div hidden>
                            @php
                                $total = 0
                            @endphp
                            @foreach($product->supplies as $supplie)
                                {{ $total = $total + $supplie->pivot->amount * $supplie->price }}
                            @endforeach
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Total') }}</label>
                            <div class="col-md-3">
                                <label class="form-control">{{ $total }} Bs</label>
                                <a class="btn btn-secondary" href="{{ route('products.index') }}" role="button">Cancelar</a>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection