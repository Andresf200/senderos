@extends('layout.layout')

@section('title', 'Carrousel')

@section('sidebar')@endsection

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-sm-12 col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    Crear imágenes
                    <a class="btn btn-success" href="{{ route('carrousel.create') }}">Crear</a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('carrousel.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Imágen</label>
                            <input type="file" class="form-control" name="carrouselImage">
                        </div>
                        <button type="submit" class="btn btn-success mt-4">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
