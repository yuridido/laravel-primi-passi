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

        <footer>
            @section('foot')
                <div>
                    <img src="" alt="">
                    <ul>
                        <li>prova</li>
                        <li>prova</li>
                        <li>prova</li>
                    </ul>
                </div>
                @yield('aggiunta')
            @show
        </footer>
    </body>
</html>
