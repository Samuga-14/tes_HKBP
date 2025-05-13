@extends('layouts.admin')

@section('content')
<div class="container mt-3 mb-0 position-relative">
    <div class="row">
        <div class="col-12">
            <h6 class="fw-semibold mb-4" style="font-size: 18px;">Edit Warta</h6>

            @if ($errors->any())
                <div class="alert alert-danger py-2 px-3" style="font-size: 14px;">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form Edit Warta -->
            <form id="formWarta" action="{{ route('admin.warta.update', $warta->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row g-4">
                    <!-- Kolom Kiri -->
                    <div class="col-md-6 pe-md-4">
                        <!-- Input Judul -->
                        <div class="mb-3">
                            <label for="judul" class="form-label fw-semibold">Judul</label>
                            <input type="text" name="judul" id="judul" class="form-control custom-form-control"
                                value="{{ old('judul', $warta->judul) }}" required>
                        </div>

                        <!-- Input Tanggal Publikasi -->
                        <div class="mb-3">
                            <label for="tanggal_publikasi" class="form-label fw-semibold">Tanggal Publikasi</label>
                            <input type="date" name="tanggal_publikasi" id="tanggal_publikasi"
                                class="form-control custom-form-control"
                                value="{{ old('tanggal_publikasi', $warta->tanggal_publikasi ? \Carbon\Carbon::parse($warta->tanggal_publikasi)->format('Y-m-d') : '') }}"
                                required>
                        </div>

                        <!-- Input Deskripsi -->
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label fw-semibold">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="5" required>{{ old('deskripsi', $warta->deskripsi) }}</textarea>
                        </div>
                    </div>

                    <!-- Kolom Kanan -->
                    <div class="col-md-6 ps-md-4">
                        <!-- Input File PDF -->
                        <div class="mb-3">
                            <label for="file_pdf" class="form-label fw-semibold">File PDF</label>
                            <input type="file" name="file_pdf" id="file_pdf" class="form-control custom-form-control" accept="application/pdf">
                            <small class="text-muted" style="font-size: 13px;">Kosongkan jika tidak ingin mengubah file PDF.</small>

                            @if ($warta->file_pdf)
                                <div class="mt-3 p-2 border rounded d-flex align-items-center justify-content-between" style="background-color: #f8f9fa;">
                                    <div class="d-flex align-items-center" style="font-size: 14px;">
                                        <i class="fas fa-file-pdf text-danger me-2 fa-lg"></i>
                                        <span>
                                            <strong>File saat ini:</strong>
                                            <a href="{{ asset('storage/' . $warta->file_pdf) }}" target="_blank">
                                                {{ basename($warta->file_pdf) }}
                                            </a>
                                        </span>
                                    </div>
                                    <a href="{{ asset('storage/' . $warta->file_pdf) }}" target="_blank" class="btn btn-sm btn-outline-primary ms-2">
                                        Lihat
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Tombol Submit -->
                <div class="d-flex justify-content-end mt-4 mb-0">
                    <button type="submit" class="btn text-white px-4 py-2" style="background-color: #0D99FF;">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    .custom-form-control {
        height: 45px;
        font-size: 16px;
    }
</style>
@endsection
