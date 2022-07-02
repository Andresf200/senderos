@extends('layout.layout')

@section('title', 'Usuarios')

@section('sidebar')@endsection

@section('content')
    <div class="row mt-5 mb-5 justify-content-center">
        <div class="col-10">
            <div class="card">
                <div class="card-header">
                    Crear usuarios
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                            <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Email"
                                   name="email" value="{{ old('email') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Contraseña</label>
                            <input type="password" class="form-control" placeholder="Contraseña"
                                   name="password" >
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nombres</label>
                            <input type="text" class="form-control" placeholder="Nombres"
                                   name="name" value="{{ old('name') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Apellidos</label>
                            <input type="text" class="form-control"
                                   placeholder="Apellidos" name="last_name" value="{{ old('last_name') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Identificación</label>
                            <input type="number" class="form-control"
                                   placeholder="Identificación" name="identifier" value="{{ old('identifier') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Teléfono</label>
                            <input type="number" class="form-control" placeholder="Teléfono"
                                   name="phone" value="{{ old('phone') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Dirección</label>
                            <input type="text" class="form-control" placeholder="Dirección"
                                   name="address" value="{{ old('address') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Municipio</label>
                            <select class="form-select" name="municipality_id">
                                @foreach($headquarters as $municipalities)
                                    <option value="{{$municipalities->id}}">{{ $municipalities->municipality }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success mt-4">Crear</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
