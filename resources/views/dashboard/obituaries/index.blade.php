@extends('layout.layout')

@section('title', 'Obituarios')

@section('sidebar')@endsection

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    Listado de obituarios
                    <a class="btn btn-success" href="{{ route('obituaries.create') }}">Crear</a>
                </div>
                <div class="card-body" style="overflow-x: scroll">
                    <table class="table table-responsive w-100" >
                        <thead class="table" style="background-color: #00bcd4">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Familia</th>
                            <th scope="col">Fecha de fallecimiento</th>
                            <th scope="col">Velación</th>
                            <th scope="col">Iglesia</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Cementerio</th>
                            <th scope="col">Municipio</th>
                            <th scope="col">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($obituaries as $obituary)
                            <tr>
                                <th scope="row">{{ $obituary->name_deceased }}</th>
                                <td>{{ $obituary->family }}</td>
                                <td>{{ $obituary->date_death }}</td>
                                <td>{{ $obituary->wake }}</td>
                                <td>{{ $obituary->church }}</td>
                                <td>{{ $obituary->hour->isoFormat('H:mm:ss A') }}</td>
                                <td>{{ $obituary->cemetery }}</td>
                                <td>{{ $obituary->municipality_id }}</td>
                                <td>
                                    <a class="d-inline" href="{{ route('obituaries.edit', $obituary->id) }}">Editar</a>
                                    <form method="POST" class="d-inline" action="{{ route('obituaries.destroy', ['obituary' => $obituary->id]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-link">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
