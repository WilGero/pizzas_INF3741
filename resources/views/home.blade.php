@extends('adminlte::page')

@section('title', 'Pizzas Andrews')

@section('content_header')
    <!--<h1>Dashboard</h1>-->
@stop

@section('content')
    <!--<p>Welcome to this beautiful admin panel.</p>-->
<div class="row">

<div class="col-sm-3 mb-3">
<a type="button" class="btn btn-primary btn-lg btn-block" href="{{ route('orders.index') }}">
    <h2>Pedidos</h2>
    <h6>Ver detalles, registrar nuevos y editar datos de los diferentes pedidos</h6>
</a>
</div>

<div class="col-sm-3 mb-3">  
<a type="button" class="btn btn-success btn-lg btn-block" href="{{ route('products.index') }}">
    <h2>Productos</h2>
    <h6>Ver detalles, registrar nuevos y editar datos de los diferentes productos</h6>
</a>
</div>

<div class="col-sm-3 mb-3">
<a type="button" class="btn btn-danger btn-lg btn-block" href="{{ route('supplies.index') }}">
    <h2>Insumos</h2>
    <h6>Ver detalles, registrar nuevos y editar datos de los diferentes insumos</h6>
</a>
</div>

<div class="col-sm-3 mb-3">
<a type="button" class="btn btn-warning btn-lg btn-block" href="{{ route('users.index') }}">
    <h2>Usuarios</h2>
    <h6>Ver detalles, registrar nuevos y editar datos de los diferentes usuarios</h6>
</a>
</div>

<div class="col-sm-3 mb-3">
<a type="button" class="btn btn-info btn-lg btn-block" href="{{ route('customers.index') }}">
    <h2>Clientes</h2>
    <h6>Ver detalles, registrar nuevos y editar datos de los diferentes clientes</h6>
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
