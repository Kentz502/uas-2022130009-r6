@extends('layouts.app')
<form action="{{ route('weapons.update', $weapon->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $weapon->name }}" required>
    </div>
    <div class="form-group">
        <label for="type">Type</label>
        <input type="text" class="form-control" id="type" name="type" value="{{ $weapon->type }}" required>
    </div>
    <div class="form-group">
        <label for="damage">Damage</label>
        <input type="number" class="form-control" id="damage" name="damage" value="{{ $weapon->damage }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update Weapon</button>
</form>
@endsection
