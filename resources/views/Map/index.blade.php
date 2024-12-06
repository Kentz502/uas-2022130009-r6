@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="mb-4">Maps</h1>

<a href="{{ route('maps.create') }}" class="btn btn-primary mb-3">Add Map</a>

<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Location</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($maps as $map)
            <tr>
                <td>{{ $map->name }}</td>
                <td>{{ $map->description }}</td>
                <td>{{ $map->location }}</td>
                <td>
                    <a href="{{ route('maps.show', $map->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('maps.edit', $map->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('maps.destroy', $map->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this weapon?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center">No map found.</td>
            </tr>
        @endforelse
    </tbody>
</table>
</div>

@endsection
