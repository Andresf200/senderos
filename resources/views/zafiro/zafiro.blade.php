<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Senderos de Paz</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
        <div class="row">
            <div class="col">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="card-img-top"
                                 src="{{ asset('img/ZAFIRO3.jpeg') }}"
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
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row bg-light justify-content-center">
            <h1 class="font2 text-center mb-5 mt-4">Conoce nuestros convenios</h1>
            <div class="col-md-10">
                <div class="swiper mt-3">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide p-5 d-flex justify-content-center align-items-center">
                            <img src="{{asset('img/diagnosticovital.jpg')}}" height="100" class="img-responsive"
                                 alt="logo_acuavalle">
                        </div>
                        <div class="swiper-slide pt-5 pb-5 d-flex justify-content-center align-items-center">
                            <img src="{{asset('img/idime2.png')}}" height="100" class="img-responsive"
                                 alt="logo_bancolombia">
                        </div>
                        <div class="swiper-slide pt-5 pb-5 d-flex justify-content-center align-items-center">
                            <img src="{{asset('img/ROCA.jpg')}}" height="120" class="img-responsive"
                                 alt="logo_servicio_cobranza">
                        </div>
                        <div class="swiper-slide pt-5 pb-5 d-flex justify-content-center align-items-center">
                            <img src="{{asset('img/lune.jpeg')}}" height="100" class="img-responsive" alt="logo_ert">
                        </div>
                        <div class="swiper-slide pt-5 pb-5 d-flex justify-content-center align-items-center">
                            <img src="{{asset('img/cafe.png')}}" height="100" class="img-responsive"
                                 alt="logo_baloto">
                        </div>
                        <div class="swiper-slide pt-5 pb-5 d-flex justify-content-center align-items-center">
                            <img src="{{asset('img/d.jpeg')}}" height="150" class="img-responsive"
                                 alt="logo_ubicación">
                        </div>
                        <div class="swiper-slide pt-5 pb-5 d-flex justify-content-center align-items-center">
                            <img src="{{asset('img/cinema.jpg')}}" height="150" class="img-responsive"
                                 alt="logo_ubicación">
                        </div>
                        <div class="swiper-slide pt-5 pb-5 d-flex justify-content-center align-items-center">
                            <img src="{{asset('img/SERMEDIC.png')}}" height="150" class="img-responsive"
                                 alt="logo_ubicación">
                        </div>
                        <div class="swiper-slide pt-5 pb-5 d-flex justify-content-center align-items-center">
                            <img src="{{asset('img/casanova.png')}}" height="150" class="img-responsive"
                                 alt="logo_ubicación">
                        </div>
                        <div class="swiper-slide pt-5 pb-5 d-flex justify-content-center align-items-center">
                            <img src="{{asset('img/MONKEYPNG.png')}}" height="150" class="img-responsive"
                                 alt="logo_ubicación">
                        </div>
                        <div class="swiper-slide pt-5 pb-5 d-flex justify-content-center align-items-center">
                            <img src="{{asset('img/surtidrogas.jpg')}}" height="150" width="300" class="img-responsive"
                                 alt="logo_ubicación">
                        </div>
                        <div class="swiper-slide pt-5 pb-5 d-flex justify-content-center align-items-center">
                            <img src="{{asset('img/evolution.jpeg')}}" height="150" class="img-responsive"
                                 alt="logo_ubicación">
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->


                    <!-- If we need scrollbar -->
                    <div class="swiper-scrollbar"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            speed: 400,
            spaceBetween: 50,
            autoplay: {
                delay: 2000
            },
            slidesPerView: 3,
            centeredSlides: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>
</body>
</html>
