@extends('layouts.app')
@section('content')

<div class="container">  
<div class="card">
    <!-- /.card-header -->
    <div class="card-body">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                @foreach ($carruseles as $row)
                <li data-target="#demo" data-slide-to="$row->id" class="{{ $loop->first ? 'active' : '' }}"></li>
                @endforeach
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
                @foreach ($carruseles as $row)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img src="{{ asset ('/images/carrousels/'.$row->urlimage)}}" alt="{{ $row->urlimage }}" width="1100" height="500">
                    <rect width="100%" height="100%" fill="#777" />
                </div>
                @endforeach
            </div>
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- /.card-body -->
</div>
</div>
<!-- /.card -->

@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
