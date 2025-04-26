@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0"><i class="fas fa-newspaper me-2"></i>Tambah Galeri</h4>
                </div>
                <div class="card-body bg-light">
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                <form action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="form-group mb-4">
                            <label for="judul" class="form-label fw-bold"><i class="fas fa-heading me-1"></i>Judul</label>
                            <input type="text" name="judul" id="judul" class="form-control form-control-lg shadow-sm" placeholder="Masukkan judul galeri" required>
                        </div>

                        <div class="form-group mb-4">
                            <label for="deskripsi" class="form-label fw-bold"><i class="fas fa-align-left me-1"></i>Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control shadow-sm" rows="6" placeholder="Tulis deskripsi galeri di sini" required></textarea>
                        </div>

                        <div class="form-group mb-4">
                            <label for="gambar" class="form-label fw-bold"><i class="fas fa-image me-1"></i>Gambar</label>
                            <input type="file" name="gambar" id="gambar" class="form-control shadow-sm" accept="image/*">
                            <small class="text-muted">Format yang didukung: JPG, PNG, GIF (Max: 2MB)</small>
                        </div>

                        <div class="form-group mb-4">
                            <label for="video" class="form-label fw-bold"><i class="fas fa-video me-1"></i>Video</label>
                            <input type="file" name="video" id="video" class="form-control shadow-sm" accept="video/*">
                            <small class="text-muted">Format yang didukung: MP4, AVI, MOV (Max: 10MB)</small>
                        </div>

                        <div class="form-group mb-4">
                            <label for="tanggal_unggah" class="form-label fw-bold"><i class="fas fa-calendar-alt me-1"></i>Tanggal Unggah</label>
                            <input type="date" name="tanggal_unggah" id="tanggal_unggah" class="form-control shadow-sm" required>
                        </div>

                        <div class="d-flex gap-3">
                            <button type="submit" class="btn btn-primary px-4">
                                <i class="fas fa-save me-1"></i> Simpan
                            </button>
                            <a href="{{ route('admin.galeri.index') }}" class="btn btn-danger px-4">
                                <i class="fas fa-times me-1"></i> Batal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
