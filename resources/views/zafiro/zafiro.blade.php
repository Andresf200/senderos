@extends('layout.home')

@section('title', 'Zafiro')

@section('home')@endsection

@section('content')
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
@endsection
