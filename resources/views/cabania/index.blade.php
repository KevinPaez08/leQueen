@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Cabañas</h1>
@stop

@section('content')
    <!--Contenedor de los productos-->
    <div class="row ">
        <div class="col-12 col-md-5 col-lg-6 mr-auto">
            <a href="{{ route('cabanias.create') }}" class="btn btn-success">Agregar</a>
        </div>
    </div>


    @foreach ($cabanias as $cabania)
        <section class="col-12 col-md-9 col-lg-8">

            <div class="card mt-2 mb-2">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <img src="{{ asset('images/' . $cabania->url) }}" alt="" class="rounded card-img-top">
                    </div>
                    <div class="col-12 col-md-6 col-lg-8">
                        <div class="card-body">
                            <p class="h3 card-title font-weight-bold">{{ $cabania->nombre }}</p>
                            <p class="card-text">{{ $cabania->descripcion }}</p>
                            <p class="card-text">${{ $cabania->precio }}</p>
                        </div>
                        <div class="dropdown pl-3">
                            <a class="btn btn-secondary dropdown-toggle " href=" #" role="button" id="dropdownMenuLink"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Acciones
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ route('cabanias.edit', $cabania->id) }}">Actualizar</a>
                                </li>
                                <li>
                                    <form action="{{ route('cabanias.destroy', $cabania) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        {{-- <a class="dropdown-item" href="">Eliminar</a> --}}
                                        <input type="submit" class="dropdown-item" value="Eliminar" />
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
@stop

@section('js')
    <script>
        console.log('Hi!');

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
@stop
