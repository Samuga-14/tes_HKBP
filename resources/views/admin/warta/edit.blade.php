@extends('layouts.admin')

@section('title', 'Edit Warta')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-gradient-primary text-white d-flex justify-content-between align-items-center py-3">
        <div class="d-flex align-items-center gap-3">
            <i class="fas fa-edit"></i>
            <h5 class="mb-0">Edit Warta</h5>
        </div>
    </div>
    <div class="card-body p-4">
            <form action="{{ route('admin.warta.update', $warta->id) }}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="judul" class="form-label fw-bold">Judul Warta</label>
                <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul', $warta->judul) }}" required>
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4" required>{{ old('deskripsi', $warta->deskripsi) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="tanggal_publikasi" class="form-label fw-bold">Tanggal Publikasi</label>
                <input type="date" name="tanggal_publikasi" id="tanggal_publikasi" class="form-control" value="{{ old('tanggal_publikasi', $warta->tanggal_publikasi) }}" required>
            </div>

            <div class="mb-3">
                <label for="file_pdf" class="form-label fw-bold">Ganti File PDF (Optional)</label>
                <input type="file" name="file_pdf" id="file_pdf" class="form-control">
                @if ($warta->file_pdf)
                    <div class="mt-2">
                        <a href="{{ asset('storage/' . $warta->file_pdf) }}" target="_blank" class="btn btn-sm btn-outline-primary">
                            <i class="fas fa-file-pdf me-1"></i> Lihat File Sebelumnya
                        </a>
                    </div>
                @endif
                <small class="text-muted">Biarkan kosong jika tidak ingin mengganti file.</small>
            </div>

            <div class="d-flex gap-3">
                <button type="submit" class="btn btn-success px-4">
                    <i class="fas fa-save me-1"></i> Simpan Perubahan
                </button>
                <a href="{{ route('admin.warta.index') }}" class="btn btn-secondary px-4">
                    <i class="fas fa-arrow-left me-1"></i> Kembali
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
