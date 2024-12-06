@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Tournament List</h1>
    <a href="{{ route('tournaments.create') }}" class="btn btn-primary mb-3">Create Tournament</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Game Mode</th>
                <th>Status</th>
                <th>Operator</th>
                <th>Map</th>
                <th>Prize Pool</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tournaments as $tournament)
                <tr>
                    <td>{{ $tournament->id }}</td>
                    <td>{{ $tournament->tournament_name }}</td>
                    <td>{{ $tournament->start_date }}</td>
                    <td>{{ $tournament->end_date }}</td>
                    <td>{{ $tournament->game_mode }}</td>
                    <td>{{ $tournament->status }}</td>
                    <td>{{ $tournament->operator->name }}</td>
                    <td>{{ $tournament->map->name }}</td>
                    <td>${{ number_format($tournament->prize_pool, 0) }}</td>
                    <td>
                        <a href="{{ route('tournaments.edit', $tournament->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('tournaments.show', $tournament->id) }}" class="btn btn-primary btn-sm">View</a>
                        <form action="{{ route('tournaments.destroy', $tournament->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
