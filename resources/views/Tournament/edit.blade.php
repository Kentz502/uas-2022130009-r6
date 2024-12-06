@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Edit Tournament</h1>
    <form action="{{ route('tournaments.update', $tournament->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Tournament Name -->
        <div class="mb-3">
            <label for="tournament_name" class="form-label">Tournament Name</label>
            <input type="text" id="tournament_name" name="tournament_name" class="form-control"
                   value="{{ old('tournament_name', $tournament->tournament_name) }}" required>
        </div>

        <!-- Start and End Date -->
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="start_date" class="form-label">Start Date</label>
                <input type="date" id="start_date" name="start_date" class="form-control"
                       value="{{ old('start_date', $tournament->start_date) }}" required>
            </div>
            <div class="col-md-6">
                <label for="end_date" class="form-label">End Date</label>
                <input type="date" id="end_date" name="end_date" class="form-control"
                       value="{{ old('end_date', $tournament->end_date) }}" required>
            </div>
        </div>

        <!-- Game Mode -->
        <div class="mb-3">
            <label for="game_mode" class="form-label">Game Mode</label>
            <input type="text" id="game_mode" name="game_mode" class="form-control"
                   value="{{ old('game_mode', $tournament->game_mode) }}" required>
        </div>

        <!-- Status -->
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select id="status" name="status" class="form-select" required>
                <option value="Upcoming" {{ old('status', $tournament->status) == 'Upcoming' ? 'selected' : '' }}>Upcoming</option>
                <option value="Ongoing" {{ old('status', $tournament->status) == 'Ongoing' ? 'selected' : '' }}>Ongoing</option>
                <option value="Completed" {{ old('status', $tournament->status) == 'Completed' ? 'selected' : '' }}>Completed</option>
            </select>
        </div>

        <!-- Prize Pool -->
        <div class="mb-3">
            <label for="prize_pool" class="form-label">Prize Pool</label>
            <input type="number" id="prize_pool" name="prize_pool" class="form-control"
                   value="{{ old('prize_pool', $tournament->prize_pool) }}" required min="0">
        </div>

        <!-- Operator Dropdown -->
        <div class="mb-3">
            <label for="operator_id" class="form-label">Operator</label>
            <select id="operator_id" name="operator_id" class="form-select" required>
                @foreach($operators as $operator)
                    <option value="{{ $operator->id }}" {{ old('operator_id', $tournament->operator_id) == $operator->id ? 'selected' : '' }}>
                        {{ $operator->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Map Dropdown -->
        <div class="mb-3">
            <label for="map_id" class="form-label">Map</label>
            <select id="map_id" name="map_id" class="form-select" required>
                @foreach($maps as $map)
                    <option value="{{ $map->id }}" {{ old('map_id', $tournament->map_id) == $map->id ? 'selected' : '' }}>
                        {{ $map->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Submit Button -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Update Tournament</button>
            <a href="{{ route('tournaments.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
