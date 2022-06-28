<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Senderos de Paz</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('zafiro') }}">Zafiro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('obituario') }}">Obituario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('headquarters') }}">Nuestras sedes</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <button class="btn btn-success" type="submit">Iniciar sesión</button>
            </form>
        </div>
    </div>
</nav>
<div class="container mt-5">
    <div class="row justify-content-center bg-light">
        <div class="col p-5">
            <h1 class="font2 text-center">Sedes senderos de paz</h1>
        </div>
    </div>
</div>
<div class="container pb-5 bg-light">
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <table class="table table-responsive">
                <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Teléfono</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Cartago Principal</td>
                    <td>Calle 12 # 2-19</td>
                    <td>(2) 2148567</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Cartago</td>
                    <td>Carrera 8 # 11-32</td>
                    <td>(2) 2138567</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Anserma</td>
                    <td>Carrera 5 # 5-69</td>
                    <td>018000113901</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Argelia</td>
                    <td>Calle 4 # 6-16</td>
                    <td>018000113901</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Sevilla</td>
                    <td>Carrera 49 # 48-52</td>
                    <td>(2) 2199023</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Caicedonia</td>
                    <td>Calle 8 # 14-59</td>
                    <td>(2) 2164163</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>Obando</td>
                    <td>Carrera 4 # 2-45</td>
                    <td>018000113901</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>Montenegro</td>
                    <td>Carrera 6 # 19-38</td>
                    <td>(6) 7537050</td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td>Zarzal</td>
                    <td>Calle 9 # 7-68</td>
                    <td>(2) 2209567</td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td>Buga</td>
                    <td>Calle 6 # 10-33</td>
                    <td>(2) 2370101</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-12 col-md-6">
            <img src="{{ asset('img/sedes.jpeg') }}" class="img-fluid" alt="">
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</body>
</html>
