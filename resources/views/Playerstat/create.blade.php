@extends('layouts.app') <!-- Sesuaikan dengan layout yang Anda gunakan -->

@section('content')
<div class="container">
    <h1 class="mb-4">Add New PlayerStat</h1>

    <!-- Tampilkan pesan error jika ada -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form Tambah Operator Baru -->
    <form action="{{ route('playerstats.store') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="name">Player</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="kills">Kill</label>
            <input type="number" name="kills" id="kills" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="deaths">Death</label>
            <input type="number" name="deaths" id="deaths" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="assists">Assist</label>
            <input type="number" name="assists" id="assists" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="ranks">Rank</label>
            <select name="rank" id="rank" class="form-control" required>
                <option value="" disabled selected>Pilih Role</option>
                <option value="Copper">Copper</option>
                <option value="Bronze">Bronze</option>
                <option value="Silver">Silver</option>
                <option value="Gold">Gold</option>
                <option value="Platinum">Platinum</option>
                <option value="Emerald">Emerald</option>
                <option value="Diamond">Diamond</option>
                <option value="Champion">Champion</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('playerstats.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
