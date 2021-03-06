@extends('layout.home')

@section('title', 'Zafiro')

@section('home')@endsection

@section('content')
    <div class="container mt-5 ">
        <div class="row text-center" >
            <div class="col">
                <img class=" img-fluid"
                     src="{{ asset('img/zafiro.png') }}"
                     alt="..."
                    style="max-width: 500px">
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
                                 alt="logo_ubicaci??n">
                        </div>
                        <div class="swiper-slide pt-5 pb-5 d-flex justify-content-center align-items-center">
                            <img src="{{asset('img/cinema.jpg')}}" height="150" class="img-responsive"
                                 alt="logo_ubicaci??n">
                        </div>
                        <div class="swiper-slide pt-5 pb-5 d-flex justify-content-center align-items-center">
                            <img src="{{asset('img/SERMEDIC.png')}}" height="150" class="img-responsive"
                                 alt="logo_ubicaci??n">
                        </div>
                        <div class="swiper-slide pt-5 pb-5 d-flex justify-content-center align-items-center">
                            <img src="{{asset('img/casanova.png')}}" height="150" class="img-responsive"
                                 alt="logo_ubicaci??n">
                        </div>
                        <div class="swiper-slide pt-5 pb-5 d-flex justify-content-center align-items-center">
                            <img src="{{asset('img/MONKEYPNG.png')}}" height="150" class="img-responsive"
                                 alt="logo_ubicaci??n">
                        </div>
                        <div class="swiper-slide pt-5 pb-5 d-flex justify-content-center align-items-center">
                            <img src="{{asset('img/surtidrogas.jpg')}}" height="150" width="300" class="img-responsive"
                                 alt="logo_ubicaci??n">
                        </div>
                        <div class="swiper-slide pt-5 pb-5 d-flex justify-content-center align-items-center">
                            <img src="{{asset('img/evolution.jpeg')}}" height="150" class="img-responsive"
                                 alt="logo_ubicaci??n">
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
