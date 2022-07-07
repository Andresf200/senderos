@extends('layout.home')

@section('title', 'Obituarios')

@section('home')@endsection

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-6 p-5 bg-light rounded-5">
                <h1 class="font text-center">Obituarios</h1>
                <p class="mt-5">En esta sección encontrará los datos de los servicios funerarios que se encuentran
                    actualmente en velación en las diferentes sedes de la Red de Senderos de Paz. Puede realizar un
                    filtro por la ciudad de su búsqueda en la siguiente casilla:</p>
                @if(!empty($cami))
                    @dd($obituaries)
                    @endif
                <form method="POST" action="{{ route('obituaries.headquarters.client')}} ">
                    @csrf
                    <div class="d-flex justify-content center align-items-center">
                        <select class="form-select" name="municipality_id">
                            <option selected>Seleccione un municipio</option>
                            @foreach($headquarters as $municipalities)
                                <option value="{{$municipalities->id}}">{{ $municipalities->municipality }}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-primary m-1">Buscar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            @foreach($obituaries as $obituarie)
                <div class="col-3 mt-5">
                    <div class="card shadow-lg">
                        <div class="card-header">
                            <strong>Nombre:</strong>{{ $obituarie->name_deceased }}
                        </div>
                        <div class="card-body">
                            <strong>Familia: </strong>{{ $obituarie->family }}
                            <br>
                            <strong>Fecha de fallecimiento: </strong>{{ $obituarie->date_death }}
                            <br>
                            <strong>Sala de velación: </strong>{{ $obituarie->wake }}
                            <br>
                            <strong>Iglesia: </strong>{{ $obituarie->church }}
                            <br>
                            <strong>Hora: </strong>{{ $obituarie->hour }}
                            <br>
                            <strong>Cementerio: </strong>{{ $obituarie->cemetery }}
                            <br>
                            <strong>Municipio: </strong>{{ $obituarie->municipality_id }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
