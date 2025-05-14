@extends('layouts.admin')

@section('content')
<div class="container mt-3 mb-0 position-relative">
    <div class="row">
        <div class="col-12">
            <h6 class="fw-semibold mb-4" style="font-size: 18px;">Edit Galeri Kegiatan</h6>

            @if ($errors->any())
                <div class="alert alert-danger py-2 px-3" style="font-size: 14px;">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form Edit Galeri -->
            <form id="formGaleri" action="{{ route('admin.galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Gunakan d-flex dan gap antar kolom -->
                <div class="row g-4">
                    <!-- Kolom Kiri -->
                    <div class="col-md-6 pe-md-4">
                        <div class="mb-4">
                            <label for="judul" class="form-label fw-semibold">Judul</label>
                            <input type="text" name="judul" id="judul" class="form-control custom-form-control"
                                value="{{ old('judul', $galeri->judul) }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="deskripsi" class="form-label fw-semibold">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="6" required>{{ old('deskripsi', $galeri->deskripsi) }}</textarea>
                        </div>
                    </div>

                    <!-- Kolom Kanan -->
                    <div class="col-md-6 ps-md-4">
                        <div class="mb-4">
                            <label for="gambar" class="form-label fw-semibold">Gambar (Opsional)</label>
                            @if ($galeri->gambar)
                                <div class="mb-2">
                                    <img src="{{ asset('images/galeri/' . $galeri->gambar) }}" alt="Gambar Galeri"
                                        class="img-thumbnail" style="max-height: 200px;">
                                    <p class="mt-1" style="font-size: 14px;">Gambar saat ini: <strong>{{ $galeri->gambar }}</strong></p>
                                </div>
                            @endif
                            <input type="file" name="gambar" id="gambar" class="form-control custom-form-control" accept="image/*">
                            <small class="text-muted" style="font-size: 13px;">Kosongkan jika tidak ingin mengubah gambar.</small>
                        </div>

                        <div class="mb-4">
                            <label for="video" class="form-label fw-semibold">Video (Opsional)</label>
                            @if ($galeri->video)
                                <div class="mb-2">
                                    <p class="mt-1" style="font-size: 14px;">Video saat ini: <strong>{{ basename($galeri->video) }}</strong></p>
                                </div>
                            @endif
                            <input type="file" name="video" id="video" class="form-control custom-form-control" accept="video/*">
                            <small class="text-muted" style="font-size: 13px;">Kosongkan jika tidak ingin mengubah video.</small>
                        </div>

                        <div class="mb-4">
                            <label for="link_google_foto" class="form-label fw-semibold">Link Google Foto</label>
                            <input type="url" name="link_google_foto" id="link_google_foto" class="form-control" value="{{ old('link_google_foto', $galeri->link_google_foto) }}">
                        </div>
                    </div>
                </div>

                <!-- Tombol Kembali dan Edit -->
                <div class="d-flex justify-content-between mt-4 mb-0">
                    <a href="{{ route('admin.galeri.index') }}" class="btn btn-secondary px-4 py-2">
                        Kembali
                    </a>
                    <button type="submit" class="btn text-white px-4 py-2" style="background-color: #0D99FF;">
                        Edit
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
