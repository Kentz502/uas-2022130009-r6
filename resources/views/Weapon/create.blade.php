@extends('layouts.app')

<form action="{{ route('weapons.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="type">Type</label>
        <input type="text" class="form-control" id="type" name="type" required>
    </div>
    <div class="form-group">
        <label for="damage">Damage</label>
        <input type="number" class="form-control" id="damage" name="damage" required>
    </div>
    <button type="submit" class="btn btn-primary">Create Weapon</button>
</form>

@endsection
