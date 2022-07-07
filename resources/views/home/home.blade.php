@extends('layout.home')

@section('title', 'home')

@section('home')@endsection

@section('content')
    <div class="container mt-5 container--color">
        <div class="row bg-light carousel--item ">
            <div class="col-12 flex-column d-flex justify-content-center align-items-center ">
                <img class="" src="{{ asset('img/logo.png') }}" height="200" alt="">
                <h1 class="text-center ml-5 mr-5 text-black font">Bienvenidos a <br> Senderos de Paz</h1>
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
                                 src="{{ asset('img/carrousel/senderos.jpg') }}"
                                 class="d-block w-100" alt="...">
                        </div>
                        @foreach($carrousel as $image)
                            <div class="carousel-item">
                                <img class="card-img-top"
                                     src="{{ asset($image->path) }}"
                                     class="d-block w-100" alt="...">
                            </div>
                        @endforeach
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
    <div class="container rounded-4 shadow-lg bg-light mt-1">
        <div class="row justify-content-around">
            <h1 class="font2 text-black text-center mt-5">Senderos de Paz siempre al alcance de ti</h1>
            <div class="col-md-5 col-sm-12 pt-5 pb-5">
                <div class="card shadow-lg" style="height: 600px;">
                    <div class="card-body">
                        <iframe class="w-100 h-100" src="https://www.youtube.com/embed/bNsaDuHrHiw"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                    <div class="card-body">
                        <h3 class="text-center">Siguenos en redes sociales</h3>
                        <div class="d-flex justify-content-around align-items-center mt-5">
                            <a href="https://www.facebook.com/senderosdepazoficial/" target="_blank">
                                <img class="m-2" src="{{ asset('img/facebook.webp') }}" height="50" alt="logo_facebook">
                            </a>
                            <a href="https://www.instagram.com/senderos.de.paz/?igshid=17vzmxverad04" target="_blank">
                                <img class="m-2" src="{{ asset('img/instagram.webp') }}" height="50"
                                     alt="logo_instagram">
                            </a>
                            <a href="https://twitter.com/senderos_de_paz?lang=es" target="_blank">
                                <img class="m-2" src="{{ asset('img/twitter.webp') }}" height="50" alt="logo_twitter">
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-5 col-sm-12 d-flex justify-content-center align-items-center bg-light pt-5 pb-5"
                 style="background-color: #cdd5da">
                <div class="card shadow-lg" style="height: 600px">
                    <div class="card-body">
                        <form>
                            <h3 class="text-center">Contactanos</h3>
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
            <h1 class="font2 text-center mb-5 mt-5">Conoce nuestros productos</h1>
        </div>
        <div class="row justify-content-center">

            <div class="col-md-8 mt-5 mb-5 d-flex justify-content-between align-items-between flex-wrap">
                <a href="{{ route('pagos') }}">
                    <img src="{{ asset('img/pago.png') }}" class="p-1" width="auto" height="100" alt="">
                </a>
                <a href="{{ route('planes') }}">
                    <img src="{{ asset('img/planes.png') }}" class="p-1" width="auto" height="100" alt="">
                </a>
            </div>
        </div>
        <div class="row p-5">
            <h1 class="font2 text-center mt-5 ">Federación nacional de comerciantes</h1>
            <div class="col-3 mt-5">
                <div class="card shadow-lg">
                    <div class="card-header text-center">
                        Fenalco
                    </div>
                    <img src="{{ asset('img/fenalco.png')  }}" class="img-thumbnail" alt="fenalco">
                </div>
            </div>
            <div class="col-3 mt-5">
                <div class="card shadow-lg">
                    <div class="card-header text-center">
                        Finsa
                    </div>
                    <img src="{{ asset('img/finsa.jpg')  }}" class="img-thumbnail" alt="fenalco">
                </div>
            </div>
            <div class="col-3 mt-5">
                <div class="card shadow-lg">
                    <div class="card-header text-center">
                        Remanso
                    </div>
                    <img src="{{ asset('img/remanso.jpg')  }}" class="img-thumbnail" alt="fenalco">
                </div>
            </div>
            <div class="col-3 mt-5">
                <div class="card shadow-lg">
                    <div class="card-header text-center">
                        Sena
                    </div>
                    <img src="{{ asset('img/sena.png')  }}" class="img-thumbnail" alt="sena">
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <h3 class="font2 text-center mb-5 mt-5">Conoce nuestras formas de pago</h3>
            <div class="col-md-10">
                <div class="swiper mt-3 mb-5">
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
@endsection
