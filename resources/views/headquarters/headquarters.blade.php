@extends('layout.home')

@section('title', 'Obituarios')

@section('home')@endsection

@section('content')
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
            <table class="table shadow-lg table-responsive">
                <thead class="table" style="background-color: #00bcd4">
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
        <div class="col-sm-12 col-md-6 shadow-lg" style="background-color: #00bcd4">
            <div class="d-flex justify-content-center align-items-center">
                <img src="{{ asset('img/mapas.png') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</div>
@endsection
