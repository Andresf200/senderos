<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand font">senderos de paz</a>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</nav>
<div class="container mt-5 container--color">
    <div class="row carousel--item bg-dark">
        <div class="col d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="col-12">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="card-img-top"
                                     src="https://media.istockphoto.com/photos/sunset-at-savannah-plains-picture-id1140829787"
                                     class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img class="card-img-top"
                                     src="https://www.tooltyp.com/wp-content/uploads/2014/10/1900x920-8-beneficios-de-usar-imagenes-en-nuestros-sitios-web.jpg"
                                     class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img class="card-img-top"
                                     src="https://static6.depositphotos.com/1006362/587/i/600/depositphotos_5876984-stock-photo-safari.jpg"
                                     class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="d-flex flex-column justify-content-center align-items-center ">
                            <img class="" src="{{ asset('img/logo2.png') }}" height="200" alt="">
                            <h1 class="text-center text-white font">Bienvenidos a senderos de paz</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-6 d-flex justify-content-center align-items-center bg-dark">
            <div class="card mt-5" style="width: 70%; height: 600px">
                <div class="card-body">
                    <iframe class="w-100 h-100" src="https://www.youtube.com/embed/bNsaDuHrHiw"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>

        <div class="col-6 d-flex justify-content-center align-items-center bg-dark">
            <div class="card" style="width: 70%; height: 600px">
                <div class="card-body">
                    <form>
                        <h3 class="font2 text-center">Contactanos</h3>
                        <div class="mb-3">
                            <label class="form-label">Nombre completo</label>
                            <input type="text" class="form-control" placeholder="Nombre completo">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Teléfono</label>
                            <input type="text" class="form-control" placeholder="Número teléfonico">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mensaje</label>
                            <textarea class="form-control" placeholder="Mensaje"></textarea>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Autorizo el manejo de datos personales
                                <a href="{{ asset('privacidad.pdf') }}" download>Politicas de privacidad</a>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</body>
</html>
