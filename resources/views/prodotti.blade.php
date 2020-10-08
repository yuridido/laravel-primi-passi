@include('partials.database')
@php
    dd($lunghe);
@endphp



<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <title></title>
    </head>
    <body>
        @include ('partials.header')
        <main>
            <div class="container">
                <div class="cards">
                    <h2>Le Lunghe</h2>
                    @foreach ($lunghe as $tipo)
                        <div class="card">
                            <img src="{{$tipo['src']}}" alt="{{$tipo['titolo']}}">
                        </div>
                    @endforeach
                </div>
                <div class="cards">
                    <h2>Le Corte</h2>

                </div>
                <div class="cards">
                    <h2>Le Cortissime</h2>

                </div>




            </div>
        </main>
    </body>
</html>
