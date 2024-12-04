@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $map->name }}</h1>
        <p>Name: {{ $map->name }}</p>
        <p>Description: {{ $map->description }}</p>
        <p>Location: {{ $map->location }}</p>
        <img src="{{ $map->photo ? Storage::url($map->photo) : 'https://placehold.co/200' }}" class="img-fluid rounded-start" alt="{{ $map->name }}">
    </div>
@endsection
