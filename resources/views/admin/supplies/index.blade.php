@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="" class="btn btn-success">Registrar nuevo insumo</a>
            <div class="card">
                <div class="card-header">{{ __('Insumos') }}</div>
            
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($supplies as $supplie)
                        <tr>
                            <td scope="col">{{ $supplie->id }}</td>
                            <td scope="col">{{ $supplie->name }}</td>
                            <td scope="col">{{ $supplie->price }}</td>
                            <td scope="col">{{ $supplie->description }}</td>
                            <td scope="col"><a href="" class="btn btn-danger"></a> <a href="" class="btn btn-warning"></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $supplies->render() !!}

            </div>
        </div>
    </div>
</div>
@endsection