@extends('layout.layout')

@section('title', 'Carrousel')

@section('sidebar')@endsection

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-sm-12 col-md-10">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    Listado de imágenes
                    <a class="btn btn-success" href="{{ route('carrousel.create') }}">Crear</a>
                </div>
                <div class="card-body">
                    <table class="table table-responsive">
                        <thead class="table" style="background-color: #00bcd4">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Ruta</th>
                            <th scope="col">Fecha de creación</th>
                            <th scope="col">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($carrouselImages as $carrousel)
                            <tr>
                                <th scope="row">{{ $carrousel->name }}</th>
                                <td>{{ $carrousel->path }}</td>
                                <td>{{ $carrousel->created_at }}</td>
                                <td>
                                    <a class="" href="">Editar</a>
                                    <a class="" href="">Eliminar</a>
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
