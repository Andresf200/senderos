@extends('layout.home')

@section('title', 'Obituarios')

@section('home')@endsection

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        @dd($obituaries)
        <div class="col-6 p-5 bg-light">
            <h1 class="font text-center">Obituarios</h1>
            <p class="mt-5">En esta sección encontrará los datos de los servicios funerarios que se encuentran actualmente en velación en las diferentes sedes de la Red de Senderos de Paz. Puede realizar un filtro por la ciudad de su búsqueda en la siguiente casilla:</p>
            <form>
                <select class="form-select" aria-label="Default select example">
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-3 mt-5">
            <div class="card">
                <div class="card-header text-center">
                    Finsa
                </div>
                <img src="{{ asset('img/finsa.jpg')  }}" class="img-thumbnail" alt="fenalco">
            </div>
        </div>
    </div>
</div>
@endsection
