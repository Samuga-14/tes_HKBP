@extends('layouts.admin')

@section('content')
<div class="container mt-3 mb-5 position-relative">
    <div class="row">
        <div class="col-lg-6">
            <h6 class="fw-semibold mb-4" style="font-size: 18px;">Edit Berita</h6>

            @if ($errors->any())
                <div class="alert alert-danger py-2 px-3" style="font-size: 14px;">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form -->
            <form id="formBerita" action="{{ route('admin.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="judul" class="form-label fw-semibold">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control custom-form-control"
                        value="{{ old('judul', $berita->judul) }}" required>
                </div>

                <div class="mb-4">
                    <label for="deskripsi" class="form-label fw-semibold">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control custom-form-control" rows="5" required>{{ old('deskripsi', $berita->deskripsi) }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="gambar" class="form-label fw-semibold">Gambar</label>
                    @if ($berita->gambar)
                        <div class="mb-2">
                            <img src="{{ asset('images/berita/' . $berita->gambar) }}" alt="Gambar Lama"
                                class="img-thumbnail" style="max-height: 200px;">
                        </div>
                    @endif
                    <input type="file" name="gambar" id="gambar" class="form-control custom-form-control" accept="image/*">
                </div>

                <div class="mb-4">
                    <label for="tanggal_publikasi" class="form-label fw-semibold">Tanggal Publikasi</label>
                    <input type="date" name="tanggal_publikasi" id="tanggal_publikasi" class="form-control custom-form-control"
                        value="{{ old('tanggal_publikasi', $berita->tanggal_publikasi ? date('Y-m-d', strtotime($berita->tanggal_publikasi)) : '') }}" required>
                </div>

                <!-- Tombol submit -->
                <div class="position-fixed" style="bottom: 150px; right: 60px; z-index: 999;">
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
