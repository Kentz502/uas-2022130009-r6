@extends('layouts.app')

<div class="card">
    <div class=" card-body">
        <h5 class="card-title">{{ $weapon->name }}</h5>
        <p class="card-text"><strong>Type:</strong> {{ $weapon->type }}</p>
        <p class="card-text"><strong>Damage:</strong> {{ $weapon->damage }}</p>
        <a href="{{ route('weapons.index') }}" class="btn btn-primary">Back to Weapons List</a>
    </div>
</div>tn-primary">Update Weapon</button>
</form>

@endsection