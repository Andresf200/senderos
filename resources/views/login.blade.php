<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>
    </head>
    <body class="antialiased">
    <h1>Login</h1>
    <form method="POST" action="{{route('login')}}">
        @csrf
        <label>
            <input name="email" type="email" placeholder="Email...">
        </label>
        <br>
        <label>
            <input name="password" type="password" placeholder="Contraseña...">
        </label>
        <br>
        <label>
            <input type="checkbox" name="rememberMe">
            Recuerda mi session
        </label>
        <button type="submit">Login</button>

    </form>
    </body>
</html>
