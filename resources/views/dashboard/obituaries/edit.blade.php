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

                    <form method="POST" action="{{ route('obituaries.update', $obituary->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Nombre completo</label>
                            <input type="text" value="{{$obituary->name_deceased}}" class="form-control" placeholder="Nombre completo" name="name_deceased">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Familia</label>
                            <input type="text" value="{{$obituary->family}}" class="form-control" placeholder="Familia" name="family">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Fecha de fallecimiento</label>
                            <input type="date" value="{{$obituary->date_death}}" class="form-control" name="date_death">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Sala de velación</label>
                            <input type="text" value="{{$obituary->wake}}" class="form-control" placeholder="Sala velación" name="wake">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Iglesia</label>
                            <input type="text" value="{{$obituary->church}}"  class="form-control" placeholder="iglesia" name="church">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Hora</label>
                            <input type="time"  value="{{$obituary->hour}}" class="form-control" name="hour">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Cementerio</label>
                            <input type="text" value="{{$obituary->cemetery}}" class="form-control" placeholder="Cementerio" name="cemetery">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Municipio</label>
                            <select class="form-select" name="municipality_id">
                                <option value="{{ $obituary->municipality_id }}" selected>Municipio</option>
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


