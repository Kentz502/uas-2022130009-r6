@extends('layouts.app')
@section('content')

<div class="container">
<h1 class="mb-4">Add New Weapon</h1>

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

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

    <div class="form-group">
        <label for="damage">Fire-Rate</label>
        <input type="number" class="form-control" id="fire_rate" name="fire_rate" required>
    </div>

     <button type="submit" class="btn btn-primary">Simpan</button>
     <a href="{{ route('weapons.index') }}" class="btn btn-secondary">Batal</a>
</form>
</div>



@endsection
