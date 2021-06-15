@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Funciones') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Usuarios</h5>
                                    <p class="card-text">Ver y cambiar roles de usuarios</p>
                                    <a href="{{ route('users.index') }}" class="btn btn-primary">Ingresar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Insumos</h5>
                                    <p class="card-text">Ver y modificar los insumos disponibles</p>
                                    <a href="{{ route('supplies.index') }}" class="btn btn-primary">Ingresar</a>
                                </div>
                            </div>
                        </div>
                  
                        <div class="col-sm-4">
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Pedidos meseros</h5>
                                    <p class="card-text">Registrar clientes y pedidos</p>
                                    <a href="#" class="btn btn-primary">Ingresar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Pedidos elaboradores</h5>
                                    <p class="card-text">Ver pedidos a elaborar</p>
                                    <a href="#" class="btn btn-primary">Ingresar</a>
                                </div>
                            </div>
                        </div>
                
                        <div class="col-sm-4">
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Clientes</h5>
                                    <p class="card-text">Ver historial de clientes</p>
                                    <a href="#" class="btn btn-primary">Ingresar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Pagos</h5>
                                    <p class="card-text">Ver pedidos a cancelar</p>
                                    <a href="#" class="btn btn-primary">Ingresar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
