@extends('layout.layout')

@section('title', 'Usuarios')

@section('sidebar')@endsection

@section('content')
    <div class="row mt-5">
        <div class="col">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    Listado de usuarios
{{--                    // todo quitar ese id que no tiene que ir--}}
                    <a class="btn btn-success" href="{{ route('users.show', 1) }}">Crear</a>
                </div>
                <div class="card-body">
                    <table class="table table-responsive w-100">
                        <thead class="table" style="background-color: #00bcd4">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Identificación</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Municipio</th>
                            <th scope="col">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td>{{ $user->identifier }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->address }}</td>
                                <td>{{ $user->municipality_id }}</td>
                                <td>
                                    <a class="" href="{{ route('users.edit', $user->id) }}">Editar</a>
                                    <a class="" href="{{ route('users.destroy', $user->id) }}">Eliminar</a>
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