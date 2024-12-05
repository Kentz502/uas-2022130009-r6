@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $weapon->name }}</h1>
        <p>Name: {{ $weapon->name }}</p>
        <p>Type: {{ $weapon->type }}</p>
        <p>Damage: {{ $weapon->damage }}</p>
        <p>Fire Rate: {{ $weapon->fire_rate }}</p>
        <img src="{{ $weapon->photo ? Storage::url($weapon->photo) : 'https://placehold.co/200' }}" class="img-fluid rounded-start" alt="{{ $weapon->name }}">
    </div>
@endsection
