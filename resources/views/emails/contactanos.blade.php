<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contactame</title>
</head>
<body class="antialiased">
<h1>Contactame Senderos de paz</h1>
<p>Esta es la información del cliente</p>
<p><strong>Nombre: </strong>{{$contacto['name']}}</p>
<p><strong>Numero Telefonico: </strong>{{$contacto['phone']}}</p>
<p><strong>Correo: </strong>{{$contacto['email']}}</p>
<p><strong>Mensaje: </strong>{{$contacto['message']}}</p>
</body>
</html>
