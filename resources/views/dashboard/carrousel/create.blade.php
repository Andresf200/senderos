<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Carrousel</title>
    </head>
    <body class="antialiased">
    <h1>Carrousel crear</h1>
    <form method="POST" action="{{ route('carrousel.destroy', ['carrousel' => 17]) }}">
        @csrf
        @method('DELETE')
        <button type="submit">
            delete
        </button>
    </form>

    <form action="{{route('carrousel.store')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <label for="">
            <input id="file-input" name="carrouselImage" type="file"/>
        </label>
        <br>
        <br>
        <button type="submit">Enviar Imagen</button>
    </form>
    </body>
</html>
