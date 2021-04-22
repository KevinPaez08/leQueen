<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/estilos_navbar.css') }}">
    @yield('enlace')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>LeQueen</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            {{-- Brand --}}
            <a href="#" class="navbar-brand">
                <img src="{{ asset('image/lequeenlogo-2.png') }}" alt="" loading="lazy" class="navbar-brand__img">
                LeQueen
            </a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#contenido-nav"
                aria-controls="contenido-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="contenido-nav">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a href="{{ route('cabanias.index') }}" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item ">
                        {{-- <a href="{{ route('users.index') }}" class="nav-link">Usuarios</a> --}}
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="btn-dropdown-service" data-bs-toggle="dropdown"
                            aria-expanded="false">Login</a>
                        <div class="dropdown-menu" aria-labelledby="btn-dropdown-service">
                            <a href="#" class="dropdown-item">otro</a>
                            <a href="#" class="dropdown-item">Sing out</a>
                        </div>
                    </li>
                </ul>
            </div>

        </div>

    </nav>

    <div class="container mb-5 mt-5">
        @yield('contenido')
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

</body>

</html>
