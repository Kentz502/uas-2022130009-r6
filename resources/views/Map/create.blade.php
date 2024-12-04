@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="mb-4">Add New Map</h1>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('maps.store') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="name">Map</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="descriprion">Description</label>
            <input type="text" name="description" id="description" class="form-control" value="{{ old('description') }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="location">Location</label>
            <input type="text" name="location" id="location" class="form-control" value="{{ old('location') }}">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('maps.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
