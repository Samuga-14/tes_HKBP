@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Berita</h1>
    <form action="{{ route('admin.berita.update', $berita) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" name="judul" value="{{ $berita->judul }}" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" rows="5" required>{{ $berita->deskripsi }}</textarea>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar (Opsional)</label><br>
            @if ($berita->gambar)
                <img src="{{ asset($berita->gambar) }}" width="150" class="mb-2">
            @endif
            <input type="file" class="form-control" name="gambar">
        </div>

        <div class="mb-3">
            <label for="tanggal_publikasi" class="form-label">Tanggal Publikasi</label>
            <input type="date" class="form-control" name="tanggal_publikasi" value="{{ \Carbon\Carbon::parse($berita->tanggal_publikasi)->format('Y-m-d') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
