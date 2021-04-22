@extends('adminlte::page')

@section('title', 'Agregar Empleados')

@section('content_header')
    <h1>Agregar Empleados</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            <form action="{{ route('users.update', $user) }}" method="POST">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col col-12 col-md-4  col-lg-6">
                        <label>Nombre:</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" required
                            value="{{ $user->name }}">
                    </div>
                    <div class="col col-12 col-md-4  col-lg-6">
                        <label>Apellidos:</label>
                        <input type="text" class="form-control" name="apellido" placeholder="Apellidos" required
                            value="{{ $user->apellido }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col col-12 col-md-4  col-lg-4">
                        <label>Edad:</label>
                        <input type="number" class="form-control" name="edad" placeholder="Edad" required
                            value="{{ $user->edad }}">
                    </div>
                    <div class="col col-12 col-md-4 col-lg-4">
                        <label>Genero:</label>
                        <select name="genero" class="form-select" required>
                            @if ($user->genero == 1)
                                <option value="1">Hombre</option>
                                <option value="0">Mujer</option>
                                <option selected>Selecciona</option>
                            @else
                                <option value="0">Mujer</option>
                                <option value="1">Hombre</option>
                                <option selected>Selecciona</option>

                            @endif
                        </select>
                    </div>
                    <div class="col col-12 col-md-4 col-lg-4">
                        <label>Teléfono:</label>
                        <input type="number" class="form-control" name="telefono" placeholder="Telefono" required
                            value="{{ $user->telefono }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col col-12 col-md-4 col-lg-6">
                        <label>Correo:</label>
                        <input type="email" class="form-control" name="email" placeholder="Correo" required
                            value="{{ $user->email }}">
                    </div>
                    <div class="col col-12 col-md-4 col-lg-6">
                        <label>Password:</label>
                        <input type="password" class="form-control" name="password" placeholder="password" required>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <input type="submit" class="btn btn-primary btn-black" value="Actualizar" />
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
