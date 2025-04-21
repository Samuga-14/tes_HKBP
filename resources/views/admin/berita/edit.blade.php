@extends('layouts.admin')

@section('content')
<<<<<<< Updated upstream
<div class="container mt-4">
    <h4>Edit Berita</h4>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.berita.update', $beritum->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control" value="{{ $beritum->judul }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4" required>{{ $beritum->deskripsi }}</textarea>
                </div>

                <div class="form-group mb-3">
                    <label for="gambar">Gambar (biarkan kosong jika tidak ingin mengubah)</label>
                    <input type="file" name="gambar" id="gambar" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="tanggal_publikasi">Tanggal Publikasi</label>
                    <input type="date" name="tanggal_publikasi" id="tanggal_publikasi" class="form-control" value="{{ $beritum->tanggal_publikasi }}" required>
                </div>

                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">Batal</a>
            </form>
=======
<div class="container">
    <h1>Edit Berita</h1>

    <form action="{{ route('admin.berita.update', $berita) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" name="judul" value="{{ $berita->judul }}" required>
>>>>>>> Stashed changes
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" rows="5" required>{{ $berita->deskripsi }}</textarea>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar (Opsional)</label><br>
            <img src="{{ asset('storage/' . $berita->gambar) }}" width="150" class="mb-2">
            <input type="file" class="form-control" name="gambar">
        </div>

        <div class="mb-3">
            <label for="tanggal_publikasi" class="form-label">Tanggal Publikasi</label>
            <input type="date" class="form-control" name="tanggal_publikasi" value="{{ $berita->tanggal_publikasi->format('Y-m-d') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
