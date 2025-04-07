@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Galeri</h2>

    <form action="{{ route('galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ $galeri->judul }}" required>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" required>{{ $galeri->deskripsi }}</textarea>
        </div>

        <div class="mb-3">
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control">
            <img src="{{ asset('storage/' . $galeri->gambar) }}" width="100">
        </div>

        <div class="mb-3">
            <label>Tanggal Unggah</label>
            <input type="date" name="tanggal_unggah" class="form-control" value="{{ $galeri->tanggal_unggah }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('galeri.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
