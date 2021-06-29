@extends('adminlte::page')
@section('title', 'Pizzas Andrews')
@include('flash::message')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrar pedido') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('orders.store') }}">
                        @csrf
                        
                        <div class="form-group row">
                            <label for="customer_id" class="col-md-4 col-form-label text-md-right">{{ __('Cliente') }}</label>
                            <div class="col-md-6">
                            <select class="form-control" id="customer_id" name="customer_id">
                                @foreach($customers as $customer)
                                    <option value="{{ $customer->id }}">{{ $customer->ci }}</option>
                                @endforeach
                            </select>
                                @error('customer_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        @foreach($products as $product)

                        <div class="form-group row">
                            <label for="amount" class="col-md-4 col-form-label text-md-right">{{ $product->name }}</label>
                            <div class="col-md-3">
                                <input id="amount" type="text" class="form-control @error('amount') is-invalid @enderror" name="{{ $product->name }}" value="0" autocomplete="amount" autofocus required>
                                @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        @endforeach

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection