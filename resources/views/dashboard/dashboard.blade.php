<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dashboard</title>
    </head>
    <body class="antialiased">
    <h1>Dashboard</h1>
    <a href="{{route('dashboard')}}"></a>
    <form action="{{route('logout')}}" method="POST">
        @csrf
        <a href="#" onclick="this.closest('form').submit()">
            Logout
        </a>
    </form>
    </body>
</html>
