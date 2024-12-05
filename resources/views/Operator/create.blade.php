@extends('layouts.app') <!-- Sesuaikan dengan layout yang Anda gunakan -->

@section('content')
<div class="container">
    <h1 class="mb-4">Add New Operator</h1>

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
    <form action="{{ route('operators.store') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="name">Nama Operator</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="primary_weapon">Primary Weapon</label>
            <input type="text" name="primary_weapon" id="primary_weapon" class="form-control" value="{{ old('primary_weapon') }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="secondary_weapon">Secondary Weapon</label>
            <input type="text" name="secondary_weapon" id="secondary_weapon" class="form-control" value="{{ old('secondary_weapon') }}">
        </div>

        <div class="form-group mb-3">
            <label for="primary_type">Role</label>
            <select name="primary_type" id="primary_type" class="form-control" required>
                <option value="" disabled selected>Pilih Role</option>
                <option value="Attacker">Attacker</option>
                <option value="Defender">Defender</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="ability">Ability</label>
            <input type="text" name="ability" id="ability" class="form-control" value="{{ old('ability') }}">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('operators.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
