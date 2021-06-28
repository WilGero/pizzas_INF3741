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

                        @foreach($order->products as $product)
                            
                        <div class="form-group row">
                            <label for="amount" class="col-md-4 col-form-label text-md-right">{{ $product->name }}</label>
                            <div class="col-md-6">
                                <label class="form-control">{{ $product->pivot->amount }}</label>
                                <label class="form-control">{{ $product->price }}</label>
                                
                            </div>
                        </div>

                        @endforeach
                        
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection