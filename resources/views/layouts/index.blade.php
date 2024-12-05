@extends('layouts.app')

@section('title', 'Rainbow Six Siege - Dashboard')

@section('content')
<div class="container mt-5">
    <!-- Title Section -->
    <div class="text-center text-light">
        <h1 class="display-4">Rainbow Six Siege Dashboard</h1>
        <p class="lead">Explore operators, maps, stats, and more!</p>
    </div>

    <!-- Cards Section -->
    <div class="row mt-5">
        <!-- Card: Operators -->
        <div class="col-md-4 mb-4">
            <div class="card bg-dark text-light shadow">
                <img src="{{ asset('images/operators.jpg') }}" class="card-img-top" alt="Operators">
                <div class="card-body">
                    <h5 class="card-title">Operators</h5>
                    <p class="card-text">Learn about all the operators and their unique abilities.</p>
                    <a href="{{ route('operators.index') }}" class="btn btn-primary w-100">Explore Operators</a>
                </div>
            </div>
        </div>

        <!-- Card: Maps -->
        <div class="col-md-4 mb-4">
            <div class="card bg-dark text-light shadow">
                <img src="{{ asset('images/maps.jpg') }}" class="card-img-top" alt="Maps">
                <div class="card-body">
                    <h5 class="card-title">Maps</h5>
                    <p class="card-text">Discover all the maps and their strategic points.</p>
                    <a href="{{ route('maps.index') }}" class="btn btn-primary w-100">Explore Maps</a>
                </div>
            </div>
        </div>

        <!-- Card: Stats -->
        <div class="col-md-4 mb-4">
            <div class="card bg-dark text-light shadow">
                <img src="{{ asset('images/stats.jpg') }}" class="card-img-top" alt="Stats">
                <div class="card-body">
                    <h5 class="card-title">Stats</h5>
                    <p class="card-text">Check out player stats and global rankings.</p>
                    <a href="{{ route('stats.index') }}" class="btn btn-primary w-100">View Stats</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="text-center text-light mt-5">
        <p>&copy; {{ date('Y') }} Rainbow Six Siege Fan Website. All Rights Reserved.</p>
    </footer>
</div>
@endsection
