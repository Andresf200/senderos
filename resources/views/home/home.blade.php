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
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #50bce0">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Senderos de Paz</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
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
                <a class="btn btn-success" href="{{ route('login') }}">Iniciar sesión</a>
            </form>
        </div>
    </div>
</nav>
<div class="container-fluid d-flex justify-content-center mt-5 container--color">
    <div class="row bg-light carousel--item ">
        <div class="col-12 flex-column d-flex justify-content-center align-items-center ">
            <img class="" src="{{ asset('img/logo.png') }}" height="200" alt="">
            <h1 class="text-center text-black font">Bienvenidos a senderos de paz</h1>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-11">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="card-img-top"
                             src="{{ asset('img/sendero.jpg') }}"
                             class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img class="card-img-top"
                             src="{{ asset('img/sendero2.jpg') }}"
                             class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img class="card-img-top"
                             src="{{ asset('img/sendero3.jpg') }}"
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
    <div class="container bg-light">
        <div class="row">
            <h1 class="font2 text-black text-center mt-5">Senderos de paz siempre al alcance de ti</h1>
            <div class="col-md-6 col-sm-12 d-flex justify-content-center align-items-center pt-5 pb-5">
                <div class="card" style="height: 600px; width: 80%">
                    <div class="card-body">
                        <iframe class="w-100 h-100" src="https://www.youtube.com/embed/bNsaDuHrHiw"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                    <div class="card-body ">
                        <h3 class="font2 text-center">Siguenos en redes sociales</h3>
                        <div class="d-flex justify-content-around align-items-center mt-5">
                            <a  href="https://www.facebook.com/senderosdepazoficial/" target="_blank">
                                <img class="m-2" src="{{ asset('img/facebook.webp') }}" height="50" alt="logo_facebook">
                            </a>
                            <a href="https://www.instagram.com/senderos.de.paz/?igshid=17vzmxverad04" target="_blank">
                                <img class="m-2" src="{{ asset('img/instagram.webp') }}" height="50" alt="logo_instagram">
                            </a>
                            <a href="https://twitter.com/senderos_de_paz?lang=es" target="_blank">
                                <img class="m-2" src="{{ asset('img/twitter.webp') }}" height="50" alt="logo_twitter">
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12 d-flex justify-content-center align-items-center bg-light pt-5 pb-5"
                 style="background-color: #cdd5da">
                <div class="card" style="height: 600px">
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
                                <label class="form-label">Correo</label>
                                <input type="text" class="form-control" placeholder="Correo eléctronico">
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
                            <button type="submit" class="btn btn-success mt-4">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container p-5 bg-light">
        <h1 class="font2 text-center mb-5">Conoce nuestros productos</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Planes familiares
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="card w-70">
                                    <img src="{{asset('img/familia.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">Plan diseñado para las familias de hoy
                                            INFORMACIÓN
                                            Cel 3104511207 / (2) 2148567</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Planes empresariales
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="card w-100" style="width: 18rem;">
                                    <img src="{{asset('img/empresarial.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">Planes acordes al tamaño de su empresa y necesidades de sus colaboradores
                                            INFORMACIÓN Cel 3204812453 / (2) 2148567</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Apoyo Psicosocial
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="card w-100">
                                    <img src="{{asset('img/psicosocial.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">Planes acordes al tamaño de su empresa y necesidades de sus colaboradores
                                            INFORMACIÓN Cel 3204812453 / (2) 2148567</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
                                Plan Galardón
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="card w-100" style="width: 18rem;">
                                    <img src="{{asset('img/galardon.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">Plan especial diseñado para la comunidad cristiana INFORMACIÓN Cel 3204812453 / (2) 2148567</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
                                Titulo Diamante
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="card w-100" style="width: 18rem;">
                                    <img src="{{asset('img/diamante.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">Senderos integra un producto para tu adulto mayor, este título ha sido creado para personas de 80 años en adelante, este servicio es transferible.
                                            INFORMACIÓN
                                            Cel 3104511207 / (2) 2148567</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseTwo">
                                Plan Pueblo
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="card w-100" style="width: 18rem;">
                                    <img src="{{asset('img/pueblo.png')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">Plan especial diseñado para la comunidad de tu pueblo.
                                            INFORMACIÓN
                                            Cel 3104511207 / (2) 2148567</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseTwo">
                                Plan Acuavalle
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="card w-100" style="width: 18rem;">
                                    <img src="{{asset('img/Acuavalle.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">Para los usuarios de la empresa de servicios de Acuavalle cobro a través de la factura de servicio.
                                            INFORMACIÓN
                                            Cel 3104511207 / (2) 2148567</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseTwo">
                                Plan bono canasta
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="card w-100" style="width: 18rem;">
                                    <img src="{{asset('img/bonocanasta.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">Seguro adicional a tu plan de previsión exequial
                                            INFORMACIÓN
                                            Cel 3104511207 / (2) 2148567</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseTwo">
                                Plan ERT
                            </button>
                        </h2>
                        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="card w-100" style="width: 18rem;">
                                    <img src="{{asset('img/Ert.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">Para los usuarios de la Empresa Regional de Telecomunicaciones en el Valle cobro a través de la factura ERT
                                            INFORMACIÓN
                                            Cel 3104511207 / (2) 2148567</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTwo">
                                Plan integral
                            </button>
                        </h2>
                        <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="card w-100" style="width: 18rem;">
                                    <img src="{{asset('img/integral.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">Plan de previsión exequial que cubre un grupo amplio de la familia
                                            INFORMACIÓN
                                            Cel 3104511207 / (2) 2148567</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseTwo">
                                Plan mascota
                            </button>
                        </h2>
                        <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="card w-100" style="width: 18rem;">
                                    <img src="{{asset('img/mascotas.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">Protege a tu mascota, ellos también hacen parte de tu familia.
                                            INFORMACIÓN
                                            Cel 3104511207 / (2) 2138567</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwo">
                                Repatriación
                            </button>
                        </h2>
                        <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="card w-100" style="width: 18rem;">
                                    <img src="{{asset('img/vista-superior-aviones-sobre-fondo-azul_23-2148580909.webp')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <ul>
                                            <li>Tramites legales Completo.</li>
                                            <li>Traslado del cuerpo hasta el aeropuerto internacional mas cercano.</li>
                                            <li>Traslado Nacional hacia la sala de velacion dispuesta por nuestra compañia.</li>
                                            <li>Todos los costos de repatriacion estan cubiertos por FINSA.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container bg-light p-5">
        <div class="row">
            <div class="col">
                <h4 class="font2 text-center">Federación nacional de comerciantes</h4>
                <div class="d-flex justify-content-around align-items-center flex-wrap">
                    <img src="{{ asset('img/fenalco.png')  }}" height="200" alt="fenalco">
                    <img src="{{ asset('img/finsa.jpg')  }}" height="160" alt="finsa">
                    <img src="{{ asset('img/remanso.jpg')  }}" height="200" alt="remanso">
                    <img src="{{ asset('img/sena.png')  }}" height="150" alt="sena">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row bg-light justify-content-center">
            <h1 class="font2 text-center mb-5 mt-4">Conoce nuestras formas de pago</h1>
            <div class="col-md-10">
                <div class="swiper mt-3">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide p-5 d-flex justify-content-center align-items-center">
                            <img src="{{asset('img/Acuavalle-Logo.png')}}" height="100" class="img-responsive"
                                 alt="logo_acuavalle">
                        </div>
                        <div class="swiper-slide pt-5 pb-5 d-flex justify-content-center align-items-center">
                            <img src="{{asset('img/logo-bancolombia.png')}}" height="100" class="img-responsive"
                                 alt="logo_bancolombia">
                        </div>
                        <div class="swiper-slide pt-5 pb-5 d-flex justify-content-center align-items-center">
                            <img src="{{asset('img/moto.png')}}" height="120" class="img-responsive"
                                 alt="logo_servicio_cobranza">
                        </div>
                        <div class="swiper-slide pt-5 pb-5 d-flex justify-content-center align-items-center">
                            <img src="{{asset('img/ert.png')}}" height="100" class="img-responsive" alt="logo_ert">
                        </div>
                        <div class="swiper-slide pt-5 pb-5 d-flex justify-content-center align-items-center">
                            <img src="{{asset('img/baloto.png')}}" height="100" class="img-responsive"
                                 alt="logo_baloto">
                        </div>
                        <div class="swiper-slide pt-5 pb-5 d-flex justify-content-center align-items-center">
                            <img src="{{asset('img/logoubicacion2.png')}}" height="150" class="img-responsive"
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
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#94E999FF" fill-opacity="1"
          d="M0,320L30,309.3C60,299,120,277,180,245.3C240,213,300,171,360,138.7C420,107,480,85,540,80C600,75,660,85,720,117.3C780,149,840,203,900,192C960,181,1020,107,1080,90.7C1140,75,1200,117,1260,154.7C1320,192,1380,224,1410,240L1440,256L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
</svg>
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


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</body>
</html>
