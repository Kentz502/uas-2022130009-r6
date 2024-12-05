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
            <h2 class="text-center mb-4">Edit PlayerStat - {{ $playerstat->name }}</h2>

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

            <form action="{{ route('playerstats.update', $playerstat->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $playerstat->name) }}" required>
                </div>

                <div class="form-group">
                    <label for="kills">Kill</label>
                    <input type="number" class="form-control" id="kills" name="kills" value="{{ old('kills', $playerstat->kills) }}" required>
                </div>

                <div class="form-group">
                    <label for="deaths">Death</label>
                    <input type="number" class="form-control" id="deaths" name="deaths" value="{{ old('deaths', $playerstat->deaths) }}" required>
                </div>

                <div class="form-group">
                    <label for="assists">Assist</label>
                    <input type="number" class="form-control" id="assists" name="assists" value="{{ old('assists', $playerstat->assists) }}" required>
                </div>

                <div class="form-group">
                    <label for="rank">Rank</label>
                    <input type="text" name="rank" class="form-control" value="{{ old('ranks', $playerstat->rank ) }}" required>
                </div>

                <button type="submit" class="btn btn-primary btn-custom btn-block mt-4">Update PlayerStat</button>
            </form>
        </div>
    </div>
@endsection
