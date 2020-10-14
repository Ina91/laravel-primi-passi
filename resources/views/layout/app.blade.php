<!DOCTYPE html>
<html lang="en" dir="ltr">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/app.css')}}"> <!--asset è un metodo per trovare le cartelle senza risalire per ogni cartella sa esattamente dove andare -->
        <title>@yield('titolo')</title>
    </head>
    <body>
        @include('partials.header')
        <main>
            @yield('main')
        </main>
    </body>
</html>
