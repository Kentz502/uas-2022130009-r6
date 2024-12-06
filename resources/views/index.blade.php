<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rainbow Six Siege</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #1c1e22;
            color: #ffffff;
        }
        .navbar {
            background-color: #2c3e50;
        }
        .navbar-brand, .nav-link {
            color: #ffffff !important;
        }
        .hero {
            text-align: center;
            padding: 50px;
            background: url('https://cdn.cloudflare.steamstatic.com/steam/apps/359550/capsule_616x353.jpg') no-repeat center center;
            background-size: cover;
            height: 400px;
            color: #fff;
        }
        .hero h1 {
            background-color: rgba(0, 0, 0, 0.5);
            display: inline-block;
            padding: 10px 20px;
        }
        .card {
            background-color: #2c2f33;
            color: #fff;
        }
        footer {
            background-color: #2c3e50;
            color: #ccc;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">R6 Siege</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#operators">Operator</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#weapons">Weapon</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#maps">Map</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#playerstats">PlayerStat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tournament">Tournament</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <h1>Welcome to Rainbow Six Siege Stats</h1>
        <p>Explore Operators, Weapons, Maps, Player Stats, and Tournaments.</p>
    </div>

    <!-- Content Section -->
    <div class="container my-5">
        <div class="row">
            <!-- Operators Section -->
            <section id="operators" class="col-md-3 mb-4">
                <h2 class="text-center mb-4">Operators</h2>
                @foreach($operators as $operator)
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">
                                <a href="{{ route('operators.show', $operator->id) }}" class="text-white">{{ $operator->name }}</a>
                            </h5>
                            <p class="card-text">{{ $operator->description }}</p>
                        </div>
                    </div>
                @endforeach
            </section>

            <!-- Weapons Section -->
            <section id="weapons" class="col-md-3 mb-4">
                <h2 class="text-center mb-4">Weapons</h2>
                @foreach($weapons as $weapon)
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">
                                <a href="{{ route('weapons.show', $weapon->id) }}" class="text-white">{{ $weapon->name }}</a>
                            </h5>
                            <p class="card-text">{{ $weapon->description }}</p>
                        </div>
                    </div>
                @endforeach
            </section>

            <!-- Maps Section -->
            <section id="maps" class="col-md-3 mb-4">
                <h2 class="text-center mb-4">Maps</h2>
                @foreach($maps as $map)
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">
                                <a href="{{ route('maps.show', $map->id) }}" class="text-white">{{ $map->name }}</a>
                            </h5>
                            <p class="card-text">{{ $map->description }}</p>
                        </div>
                    </div>
                @endforeach
            </section>

            <!-- PlayerStats Section -->
            <section id="playerstats" class="col-md-3 mb-4">
                <h2 class="text-center mb-4">Player Stats</h2>
                @foreach($playerStats as $player)
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">
                                <a href="{{ route('playerstats.show', $player->id) }}" class="text-white">{{ $player->name }}</a>
                            </h5>
                            <p class="card-text">{{ $player->stat }}</p>
                        </div>
                    </div>
                @endforeach
            </section>
        </div>

        <!-- Tournament Section -->
    <section id="tournament">
        <h2 class="text-center mb-4">Tournaments</h2>
        @foreach($tournaments as $tournament)
            <div class="card mb-4">
                <div class="card-body text-center">
                    <h5 class="card-title">
                    <a href="{{ route('tournaments.show', $tournament->id) }}" class="text-white">{{ $tournament->name }}</a>
                    </h5>
                </div>
             </div>
        @endforeach
    </section>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Rainbow Six Siege Fan Website. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
