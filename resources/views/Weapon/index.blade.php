@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="mb-4">Weapons</h1>

<a href="{{ route('weapons.create') }}" class="btn btn-primary mb-3">Add Weapon</a>

<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Damage</th>
            <th>Fire Rate/Minute</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($weapons as $weapon)
            <tr>
                <td>{{ $weapon->name }}</td>
                <td>{{ $weapon->type }}</td>
                <td>{{ $weapon->damage }}</td>
                <td>{{ $weapon->fire_rate }}</td>
                <td>
                    <a href="{{ route('weapons.show', $weapon->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('weapons.edit', $weapon->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('weapons.destroy', $weapon->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this weapon?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center">No weapons found.</td>
            </tr>
        @endforelse
    </tbody>
</table>
</div>

@endsection
