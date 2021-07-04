@extends('adminlte::page')

@section('title', 'Pizzas Andrews')

@section('content_header')
    <!--<h1>Dashboard</h1>-->
@stop

@section('content')
    <!--<p>Welcome to this beautiful admin panel.</p>-->
<div class="row">

<div class="col-4" id="contant" title="Conteo de registros antecedentes" data-toggle="tooltip" data-html="true">
    <a type="button" class="btn btn-primary btn-lg btn-block small-box bg-primary" href="{{ route('orders.index') }}">
        <div class="inner">
            <h3>Pedidos</h3>
            <p><span>Registro total de pedidos</span></p>
        </div>
        <div class="icon">
            <i class="fas fa-utensils"></i>
        </div>
    </a>
</div>

<div class="col-4" id="contant" title="Conteo de registros antecedentes" data-toggle="tooltip" data-html="true">
    <a type="button" class="btn btn-primary btn-lg btn-block small-box bg-info" href="{{ route('customers.index') }}">
        <div class="inner">
            <h3>Clientes</h3>
            <p><span>Registro total de clientes</span></p>
        </div>
        <div class="icon">
            <i class="fas fa-users"></i>
        </div>
    </a>
</div>

</div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
