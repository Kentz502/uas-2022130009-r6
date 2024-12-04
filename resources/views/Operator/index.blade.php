@extends('layouts.app') <!-- Sesuaikan dengan layout yang Anda gunakan -->

@section('content')
<div class="container">
    <h1 class="mb-4">Operator</h1>

    <!-- Tampilkan pesan sukses jika ada -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tombol Tambah Operator Baru -->
    <a href="{{ route('operators.create') }}" class="btn btn-primary mb-3">Add Operator</a>

    <!-- Tabel Daftar Operator -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Primary Weapon</th>
                <th>Secondary Weapon</th>
                <th>Primary Type</th>
                <th>Ability</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($operators as $operator)
                <tr>
                    <td>{{ $operator->name }}</td> <!-- Kolom Nama -->
                    <td>{{ $operator->primary_weapon }}</td> <!-- Kolom Senjata Utama -->
                    <td>{{ $operator->secondary_weapon }}</td> <!-- Kolom Senjata Sekunder -->
                    <td>{{ $operator->primary_type }}</td> <!-- Kolom Tipe Utama -->
                    <td>{{ $operator->ability }}</td> <!-- Kolom Kemampuan -->
                    <td>
                        <!-- Tombol Tindakan -->
                        <a href="{{ route('operators.show', $operator->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('operators.edit', $operator->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('operators.destroy', $operator->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus operator ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">Tidak ada operator ditemukan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
