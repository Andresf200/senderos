@extends('layout.layout')

@section('title', 'Carrousel')

@section('sidebar')@endsection

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-sm-12 col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    Listado de imágenes
                    <a class="btn btn-success" href="{{ route('carrousel.create') }}">Crear</a>
                </div>
                <div class="card-body">
                    <table class="table table-responsive w-100">
                        <thead class="table" style="background-color: #00bcd4">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Ruta</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{--                        @foreach($obituaries as $obituary)--}}
                        {{--                            <tr>--}}
                        {{--                                <th scope="row">{{ $obituary->name_deceased }}</th>--}}
                        {{--                                <td>{{ $obituary->family }}</td>--}}
                        {{--                                <td>{{ $obituary->date_death }}</td>--}}
                        {{--                                <td>{{ $obituary->wake }}</td>--}}
                        {{--                                <td>{{ $obituary->church }}</td>--}}
                        {{--                                <td>{{ $obituary->hour }}</td>--}}
                        {{--                                <td>{{ $obituary->hour }}</td>--}}
                        {{--                                <td>{{ $obituary->cemetery }}</td>--}}
                        {{--                                <td>{{ $obituary->municipality_id }}</td>--}}
                        {{--                                <td>--}}
                        {{--                                    <a class="btn btn-primary" href="">Editar</a>--}}
                        {{--                                    <a class="btn btn-danger" href="">Eliminar</a>--}}
                        {{--                                </td>--}}
                        {{--                            </tr>--}}
                        {{--                        @endforeach--}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
