@extends('adminlte::page')

@section('title', 'Agregar Cabañas')

@section('content_header')
    <h1>Agregar Cabañas</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            <form action="{{ route('cabanias.store') }}" method="POST" enctype="multipart/form-data">
                @csrf


                <div class="row">
                    <div class="col col-12 col-md-4  col-lg-6">
                        <label>Nombre:</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
                    </div>
                    <div class="col col-12  col-md-4 col-lg-4 ">
                        <label>Precio:</label>
                        <input type="number" class="form-control" name="precio" value="0.00" min="1" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-12 col-md-6  col-lg-10">
                        <label>Descripción:</label>
                        <textarea type="text" class="form-control" name="descripcion" placeholder="Escribe una Descripción"
                            rows="3" required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-12 col-md-4">
                        <label>Disponibilidad:</label>
                        <select name="disponibilidad" class="form-control" required>
                            <option value="">Selecciona</option>
                            <option value="1">Si</option>
                            <option value="0">No</option>
                        </select>

                    </div>
                    {{-- <div class="col col-12 col-md-4">
                    <label>Tipo de Cabaña:</label>
                    <select name="tipoCabania_id" class="form-control" required>
                        <option value="">Selecciona</option>
                        @foreach ($tipoCabanias as $tipoCabania)
                            <option value="{{ $tipoCabania->id }}">{{ $tipoCabania->nombre }}</option>
                        @endforeach
                    </select>
                </div> --}}
                    <div class="col col-12 col-md-4 form-group">
                        <label for="exampleFormControlFile1">Subir Imagen</label>
                        <input type="file" class="form-control-file" name="url">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <input type="submit" class="btn btn-primary btn-black" value="Enviar" />
                    </div>
                </div>
            </form>

        </div>
    </div>
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
