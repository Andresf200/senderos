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
                            <th scope="col">Imagen</th>
                            <th scope="col">Fecha de creación</th>
                            <th scope="col">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($carrouselImages as $carrousel)
                            <tr>
                                <th scope="row">{{ $carrousel->name }}</th>
                                <td><img
                                         src="{{ asset($carrousel->path) }}"
                                         class="d-block w-100" alt="...">
                                </td>
                                <td>{{ $carrousel->created_at }}</td>
                                <td>
                                    <form method="POST" class="d-inline" action="{{ route('carrousel.destroy', ['carrousel' => $carrousel->id]) }}">
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
