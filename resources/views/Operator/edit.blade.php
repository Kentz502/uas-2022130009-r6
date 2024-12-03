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
            <h2 class="text-center mb-4">Edit Operator - {{ $operator->name }}</h2>

            {{-- Error and validation messages --}}
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('operators.update', $operator->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $operator->name) }}" required>
                </div>

                <div class="form-group">
                    <label for="primary_type">Primary Type</label>
                    <select name="primary_type" class="form-control">
                        <option value="Attacker" {{ old('primary_type', $operator->primary_type) == 'Attacker' ? 'selected' : '' }}>Attacker</option>
                        <option value="Defender" {{ old('primary_type', $operator->primary_type) == 'Defender' ? 'selected' : '' }}>Defender</option>
                        <!-- Tambahkan opsi lainnya -->
                    </select>
                </div>

                <div class="form-group">
                    <label for="primary_weapon">Primary Weapon</label>
                    <input type="text" name="primary_weapon"  class="form-control" value="{{ old('primary_weapon', $operator->primary_weapon) }}" required>
                </div>

                <div class="form-group">
                    <label for="secondary_weapon">Secondary Weapon</label>
                    <input type="text" name="secondary_weapon" class="form-control" value="{{ old('secondary_weapon', $operator->secondary_weapon) }}" required>
                </div>

                <div class="form-group">
                    <label for="ability">Ability</label>
                    <input type="text" name="ability" class="form-control" value="{{ old('ability', $operator->ability) }}" required>
                </div>

                <div class="form-group">
                    <label for="photo">Photo</label>
                    <input type="file" name="photo" class="form-control-file">
                    @if($operator->photo)
                        <img src="{{ Storage::url($operator->photo) }}" alt="{{ $operator->name }}" class="img-thumbnail mt-3" width="200">
                    @endif
                </div>

                <button type="submit" class="btn btn-primary btn-custom btn-block mt-4">Update Operator</button>
            </form>
        </div>
    </div>
@endsection
