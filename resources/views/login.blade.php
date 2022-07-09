<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/login.css') }}"/>
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<div class="contenedor">
    <main class="py-4">
        <div class="container-fluid">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif

            @if (isset($errors) && $errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </main>
    <form class="contenedor_login" method="POST" action="{{ route('login') }}">
        @csrf
        <img src="{{asset( 'img/logo2.png' )}}" height="100px" alt="Imagen del logo" class="imagen">
        <h3 class="mt-5"> Ingresar al sistema</h3>
        <label>Correo eléctronico</label>
        <input type="text" placeholder="Ingrese su correo eléctronico" name="email">
        <label>Contraseña</label>
        <input type="password" placeholder="Ingrese su contraseña" name="password">
        <input type="submit" value="Ingresar" class="efecto">
        <div class="d-flex justify-content-center">
            <a class="btn btn-outline-success m-1 w-100" href="{{ route('home') }}">Regresar</a>
        </div>
    </form>
</div>
</body>
</html>
