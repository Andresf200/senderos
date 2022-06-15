<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Carrousel</title>
    </head>
    <body class="antialiased">
    <h1>Carrousel Listado</h1>
    {{dd($carrouselImages)}}
    </body>
</html>
