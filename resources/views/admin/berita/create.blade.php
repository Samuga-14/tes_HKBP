@extends('layouts.admin')

@section('content')
<div class="container mt-3 mb-0 position-relative">
    <div class="row">
        <div class="col-lg-8">
            <h6 class="fw-semibold mb-4" style="font-size: 18px;">Tambah Berita</h6>

            @if ($errors->any())
                <div class="alert alert-danger py-2 px-3" style="font-size: 14px;">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form id="formBerita" action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label for="judul" class="form-label fw-semibold">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control custom-form-control" required>
                </div>

                <div class="mb-4">
                    <label for="deskripsi" class="form-label fw-semibold">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" rows="5" required></textarea>
                </div>

                <div class="mb-4">
                    <label for="tanggal_publikasi" class="form-label fw-semibold">Tanggal Publikasi</label>
                    <input type="date" name="tanggal_publikasi" id="tanggal_publikasi" class="form-control custom-form-control" required>
                </div>

                <div class="mb-4">
                    <label for="gambar" class="form-label fw-semibold">Gambar (Opsional)</label>
                    <input type="file" name="gambar" id="gambar" class="form-control custom-form-control" accept="image/*">
                </div>
            </form>
        </div>
    </div>

    <div class="d-flex justify-content-end mt-5 mb-0">
        <button type="submit" class="btn text-white px-4 py-2" style="background-color: #0D99FF;" form="formBerita">
            Tambahkan
        </button>
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
