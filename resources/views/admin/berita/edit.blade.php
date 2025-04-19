@extends('layouts.admin')

@section('content')
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
        </div>
    </div>
</div>
@endsection
