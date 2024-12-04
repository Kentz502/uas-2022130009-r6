@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #f8f9fa;
        font-family: 'Arial', sans-serif;
    }

    .form-container {
        background-color: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        max-width: 700px;
        margin: 50px auto;
    }

    .btn-custom {
        border-radius: 30px;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .form-group label {
        font-weight: bold;
    }

    .form-control {
        border-radius: 5px;
    }

    .form-control-file {
        margin-top: 10px;
    }
</style>

<div class="container">
    <div class="form-container">
        <h2 class="text-center mb-4">Edit Map- {{ $map->name }}</h2>

        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('maps.update', $map->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $map->name) }}" required>
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" id="description" name="description" value="{{ old('description', $map->description) }}" required>
    </div>

    <div class="form-group">
        <label for="locaton">Location</label>
        <input type="text" class="form-control" id="location" name="location" value="{{ old('location', $map->location) }}" required>
    </div>



    <button type="submit" class="btn btn-primary">Update Map</button>
</form>
</div>
</div>

@endsection
