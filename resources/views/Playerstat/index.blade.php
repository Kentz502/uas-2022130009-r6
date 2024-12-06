@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="mb-4">PlayerStat</h1>

<a href="{{ route('playerstats.create') }}" class="btn btn-primary mb-3">Add PlayerStat</a>

<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th>Name</th>
            <th>Kills</th>
            <th>Deaths</th>
            <th>Assist</th>
            <th>Rank</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($playerstats as $playerstat)
            <tr>
                <td>{{ $playerstat->name }}</td>
                <td>{{ $playerstat->kills }}</td>
                <td>{{ $playerstat->deaths}}</td>
                <td>{{ $playerstat->assists }}</td>
                <td>{{ $playerstat->rank }}</td>
                <td>
                    <a href="{{ route('playerstats.show', $playerstat->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('playerstats.edit', $playerstat->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('playerstats.destroy', $playerstat->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this PlayerStats?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center">No playerstats found.</td>
            </tr>
        @endforelse
    </tbody>
</table>
</div>

@endsection
