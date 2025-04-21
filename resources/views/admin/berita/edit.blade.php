@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <div class="card shadow-sm border-0 rounded-3">
        <div class="card-header bg-gradient bg-primary bg-opacity-10 border-0">
            <h4 class="mb-0 py-2 text-primary">Edit Berita</h4>
        </div>
        <div class="card-body p-4">
            <form action="{{ route('admin.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group mb-4">
                    <label for="judul" class="form-label fw-semibold">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control form-control-lg border-0 bg-light" value="{{ $berita->judul }}" required>
                </div>

                <div class="form-group mb-4">
                    <label for="deskripsi" class="form-label fw-semibold">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control border-0 bg-light" rows="6" required>{{ $berita->deskripsi }}</textarea>
                </div>

                <div class="form-group mb-4">
                    <label for="gambar" class="form-label fw-semibold">Gambar</label>
                    <div class="mb-3">
                        @if($berita->gambar)
                            <img src="{{ asset('storage/' . $berita->gambar) }}" class="img-thumbnail" style="max-width: 200px">
                        @endif
                    </div>
                    <div class="input-group">
                        <input type="file" name="gambar" id="gambar" class="form-control border-0 bg-light" accept="image/*">
                        <span class="input-group-text bg-light border-0 text-muted">Optional</span>
                    </div>
                </div>

                <div class="form-group mb-4">
                    <label for="tanggal_publikasi" class="form-label fw-semibold">Tanggal Publikasi</label>
                    <input type="date" name="tanggal_publikasi" id="tanggal_publikasi" class="form-control border-0 bg-light" value="{{ $berita->tanggal_publikasi }}" required>
                </div>

                <div class="d-flex gap-2 mt-4">
                    <button type="submit" class="btn btn-primary px-4 py-2">
                        <i class="fas fa-save me-2"></i>Update
                    </button>
                    <a href="{{ route('admin.berita.index') }}" class="btn btn-light px-4 py-2">
                        <i class="fas fa-arrow-left me-2"></i>Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection