@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-warning text-white">
                    <h4 class="mb-0"><i class="fas fa-edit me-2"></i>Edit Berita</h4>
                </div>
                <div class="card-body bg-light">
                <form action="{{ route('admin.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                     @method('PUT')


                        <div class="form-group mb-4">
                            <label for="judul" class="form-label fw-bold"><i class="fas fa-heading me-1"></i>Judul</label>
                            <input type="text" name="judul" id="judul" class="form-control form-control-lg shadow-sm"
                                   value="{{ old('judul', $berita->judul) }}" required>
                        </div>

                        <div class="form-group mb-4">
                            <label for="deskripsi" class="form-label fw-bold"><i class="fas fa-align-left me-1"></i>Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control shadow-sm" rows="6" required>{{ old('deskripsi', $berita->deskripsi) }}</textarea>
                        </div>

                        <div class="form-group mb-4">
                            <label for="gambar" class="form-label fw-bold"><i class="fas fa-image me-1"></i>Gambar</label>
                            <input type="file" name="gambar" id="gambar" class="form-control shadow-sm" accept="image/*">
                            <small class="text-muted">Format yang didukung: JPG, PNG, GIF (Max: 2MB)</small><br>

                            @if ($berita->gambar)
                                <div class="mt-3">
                                    <strong>Gambar Saat Ini:</strong><br>
                                    <img src="{{ asset($berita->gambar) }}" alt="Gambar Berita" class="img-thumbnail mt-2" width="200">
                                </div>
                            @endif
                        </div>

                        <div class="form-group mb-4">
                            <label for="tanggal_publikasi" class="form-label fw-bold"><i class="fas fa-calendar-alt me-1"></i>Tanggal Publikasi</label>
                            <input type="date" name="tanggal_publikasi" id="tanggal_publikasi" class="form-control shadow-sm"
                                   value="{{ old('tanggal_publikasi', $berita->tanggal_publikasi ? date('Y-m-d', strtotime($berita->tanggal_publikasi)) : '') }}" required>
                        </div>

                        <div class="d-flex gap-3">
                            <button type="submit" class="btn btn-warning px-4 text-white">
                                <i class="fas fa-save me-1"></i> Update
                            </button>
                            <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary px-4">
                                <i class="fas fa-arrow-left me-1"></i> Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
