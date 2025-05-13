@extends('layouts.admin')

@section('content')
<div class="container py-4 position-relative">
    <div class="row">
        <div class="col-lg-6">
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
                    <input type="text" name="judul" id="judul" class="form-control custom-form-control" value="{{ old('judul') }}" required>
                </div>

                <div class="mb-4">
                    <label for="deskripsi" class="form-label fw-semibold">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control custom-form-control" rows="5" required>{{ old('deskripsi') }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="tanggal_publikasi" class="form-label fw-semibold">Tanggal Publikasi</label>
                    <input type="date" name="tanggal_publikasi" id="tanggal_publikasi" class="form-control custom-form-control" value="{{ old('tanggal_publikasi') }}" required>
                </div>

                <div class="mb-4">
                    <label for="gambar" class="form-label fw-semibold">Gambar</label>
                    <input type="file" name="gambar" id="gambar" class="form-control custom-form-control" accept="image/*">
                </div>
            </form>
        </div>
    </div>

    <div class="d-flex justify-content-end">
        <button type="submit" class="btn text-white px-4 py-2" style="background-color: #0D99FF;" form="formBerita">
            Tambahkan
        </button>
    </div>
</div>
@endsection

@section('styles')
<style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }

    body {
        display: flex;
        flex-direction: column;
    }

    main {
        flex: 1;
    }

    footer {
        margin-top: auto;
    }

    .custom-form-control {
        height: 45px;
        font-size: 16px;
    }

    .container {
        margin-bottom: 0 !important;
        padding-bottom: 0 !important;
    }

    .d-flex.justify-content-end {
        margin-bottom: 0 !important;
    }
</style>
@endsection
