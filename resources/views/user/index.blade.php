@extends('adminlte::page')

@section('title', 'Empleados')

@section('content_header')
    <h1>Empleados</h1>
@stop

@section('content')
    <!--Contenedor de los productos-->
    <div class="row mb-3">
        <div class="col-12 col-md-5 col-lg-6 mr-auto">
            <a href="{{ route('users.create') }}" class="btn btn-success">Agregar</a>
        </div>
    </div>


    <div class="container">

        <table class="table table-striped table-hover table-sm">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Edad</th>
                    {{-- <th scope="col">Género</th> --}}
                    <th scope="col">Telefono</th>
                    <th scope="col">Correo</th>
                    <th scope="col" colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->apellido }}</td>
                        <td>{{ $user->edad }}</td>
                        {{-- <td>{{ $user->genero }}</td> --}}
                        <td>{{ $user->telefono }}</td>
                        <td>{{ $user->email }}</td>
                        <td><a type="button" class="btn btn-info" href="{{ route('users.edit', $user->id) }}"><i
                                    class="fas fa-edit"></i>Edit</a></td>
                        <td>
                            <form action="{{ route('users.destroy', $user) }}" method="POST">
                                @csrf
                                @method('delete')
                                <i class="fas fa-trash-alt"></i>
                                <input type="submit" class="btn btn-danger" value="Delete" />
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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
