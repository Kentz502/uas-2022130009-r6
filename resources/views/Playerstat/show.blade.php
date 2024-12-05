@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $playerstat->name }}</h1>
        <p>Name: {{ $playerstat->name }}</p>
        <p>Kills: {{ $playerstat->kills }}</p>
        <p>Deaths: {{ $playerstat->deaths }}</p>
        <p>Assists: {{ $playerstat->assists }}</p>
        <p>Rank: {{ $playerstat->ranks }}</p>
        <img src="{{ $playerstat->photo ? Storage::url($playerstat->photo) : 'https://placehold.co/200' }}" class="img-fluid rounded-start" alt="{{ $playerstat->name }}">
    </div>
@endsection
