@extends('layouts.app')

@section('content')

<divbtn-primary class="card">
    <div class=" card-body">
        <h5 class="card-title">{{ $weapon->name }}</h5>
        <p class="card-text"><strong>Type:</strong> {{ $weapon->type }}</p>
        <p class="card-text"><strong>Damage:</strong> {{ $weapon->damage }}</p>
        <p class="card-text"><strong>Fire_Rate:</strong> {{ $weapon->fire_rate }}</p>
        <img src="{{ $weapon->photo ? Storage::url($weapon->photo) : 'https://placehold.co/200' }}" class="img-fluid rounded-start" alt="{{ $weapon->name }}">
    </div>
</form>

@endsection
