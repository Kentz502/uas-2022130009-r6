@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $tournament->tournament_name }}</h1>
    <ul>
        <li>Start Date: {{ $tournament->start_date }}</li>
        <li>End Date: {{ $tournament->end_date }}</li>
        <li>Game Mode: {{ $tournament->game_mode }}</li>
        <li>Map: {{ $tournament->map->name ?? 'N/A' }}</li>
        <li>Status: {{ $tournament->status }}</li>
        <li>Prize Pool: {{ $tournament->prize_pool }}</li>
        <li>Operator: {{ $tournament->operator->name ?? 'N/A' }}</li>
    </ul>
    <a href="{{ route('tournaments.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
