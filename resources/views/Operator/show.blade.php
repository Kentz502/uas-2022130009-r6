@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $operator->name }}</h1>
        <p>Name: {{ $operator->name }}</p>
        <p>Primary Type: {{ $operator->primary_type }}</p>
        <p>Primary Weapon: {{ $operator->primary_weapon }}</p>
        <p>Secondary Weapon: {{ $operator->secondary_weapon }}</p>
        <p>Ability: {{ $operator->ability }}</p>
        <img src="{{ $operator->photo ? Storage::url($operator->photo) : 'https://placehold.co/200' }}" class="img-fluid rounded-start" alt="{{ $operator->name }}">
    </div>
@endsection
