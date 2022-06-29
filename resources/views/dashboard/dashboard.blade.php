<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <title>Dashboard</title>
    </head>
    <body class="antialiased">
     <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #50bce0">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Senderos de Paz</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Carrousel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('obituaries.client') }}">Obituarios</a>
                    </li>
                </ul>
                <form class="d-flex" role="search" action="{{route('logout')}}">
                    @csrf
                    <a href="#" class="btn btn-primary" onclick="this.closest('form').submit()">
                        Cerrar sesión
                    </a>
                </form>
            </div>
        </div>
    </nav>
    <div class="container bg-light mt-5">
        <div class="row">
            <div class="col">
                <h1 class="font2 text-center">Dashboard</h1>
            </div>
        </div>
    </div>

    <a href="{{route('dashboard')}}"></a>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>
    </body>
</html>
