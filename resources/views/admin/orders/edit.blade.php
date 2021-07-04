@extends('adminlte::page')
@section('title', 'Pizzas Andrews')
@include('flash::message')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar pedido') }}</div>

                <div class="card-body">
                    <form method="PUT" action="{{ route('orders.update', $order->id) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>
                            <div class="col-md-6">
                            <select class="form-control" id="state" name="state" required>
                                    <option value="pendiente">pendiente</option>
                                    <option value="elaborado">elaborado</option>
                                    <option value="pagado">pagado</option>
                            </select>
                                @error('state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Editar') }}
                                </button>
                                <a class="btn btn-secondary" href="{{ route('orders.index') }}" role="button">Cancelar</a>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection