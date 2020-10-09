@php
$cards = config('prodotti');
$lunghe = [];
$corte = [];
$cortissime = [];


foreach ($cards as $card) {
    if ($card['tipo'] == 'lunga') {
        $lunghe[] = $card;

    } elseif ($card['tipo'] == 'corta') {
        $corte[] = $card;
    } elseif ($card['tipo'] == 'cortissima') {
        $cortissime[] = $card;
    }
}


@endphp

@extends('layout.app')
@section('titolo', 'Prodotti | La Molisana')

@section('main')
    <div class="container">
        <h2>Le Lunghe</h2>
        <div class="cards clearfix">
            @foreach ($lunghe as $tipo)
                <div class="card">
                    <img src="{{$tipo['src']}}" alt="{{$tipo['titolo']}}">
                </div>
            @endforeach
        </div>
        <h2>Le Corte</h2>
        <div class="cards clearfix">
            @foreach ($corte as $tipo)
                <div class="card">
                    <img src="{{$tipo['src']}}" alt="{{$tipo['titolo']}}">
                </div>
            @endforeach

        </div>
        <h2>Le Cortissime</h2>
        <div class="cards clearfix">
            @foreach ($cortissime as $tipo)
                <div class="card">
                    <img src="{{$tipo['src']}}" alt="{{$tipo['titolo']}}">
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('aggiunta')
    @parent
    <p>visibile solo in prodotti</p>

@endsection
