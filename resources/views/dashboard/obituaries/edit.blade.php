@extends('layout.layout')

@section('title', 'Obituarios')

@section('sidebar')@endsection

@section('content')
    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-sm-12 col-md-8">
            <div class="card">
                <div class="card-header">
                    Editar obituarios
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('obituaries.update', $obituaries->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Nombres</label>
                            <input type="text" value="{{ $obituaries->name }}" class="form-control" placeholder="Nombres" name="name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Apellidos</label>
                            <input type="text" value="{{ $obituaries->last_name }}" class="form-control" placeholder="Apellidos" name="last_name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Identificación</label>
                            <input type="text" value="{{ $obituaries->identifier }}" class="form-control" placeholder="Identificación" name="identifier">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Teléfono</label>
                            <input type="text" value="{{ $obituaries->phone }}" class="form-control" placeholder="Teléfono" name="phone">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Dirección</label>
                            <input type="text" value="{{ $obituaries->address }}" class="form-control" placeholder="Dirección" name="address">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Municipio</label>

                            <select class="form-select" name="municipality_id">
                                <option value="{{ $obituaries->municipality_id }}" selected>Municipio</option>
                                @foreach($headquarters as $municipalities)
                                    <option value="{{$municipalities->id}}">{{ $municipalities->municipality }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success mt-4">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

