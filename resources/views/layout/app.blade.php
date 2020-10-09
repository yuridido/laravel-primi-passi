<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <title>@yield('titolo')</title>
    </head>
    <body>
        @include ('partials.header')
        <main>
            @yield('main')
        </main>
    </body>
</html>
