@extends('layouts.admin')

@section('content')
<div class="container mt-3 mb-0 position-relative">
    <div class="row">
        <div class="col-lg-8">
            <h6 class="fw-semibold mb-3" style="font-size: 18px;">Tambah Warta</h6>

            @if ($errors->any())
                <div class="alert alert-danger py-2 px-3" style="font-size: 14px;">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form id="formWarta" action="{{ route('admin.warta.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Input Judul -->
                <div class="mb-3">
                    <label for="judul" class="form-label fw-semibold">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control custom-form-control" required>
                </div>

                <!-- Input Deskripsi -->
                <div class="mb-3">
                    <label for="deskripsi" class="form-label fw-semibold">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4" required></textarea>
                </div>

                <!-- Input Tanggal Publikasi -->
                <div class="mb-3">
                    <label for="tanggal_publikasi" class="form-label fw-semibold">Tanggal Publikasi</label>
                    <input type="date" name="tanggal_publikasi" id="tanggal_publikasi" class="form-control custom-form-control" required>
                </div>

                <!-- Input File PDF -->
                <div class="mb-3">
                    <label for="file_pdf" class="form-label fw-semibold">File PDF</label>
                    <input type="file" name="file_pdf" id="file_pdf" class="form-control custom-form-control" accept="application/pdf" required>
                </div>

            </form>
        </div>
    </div>

    <!-- Tombol Submit dinaikkan dengan mt-1 -->
    <div class="d-flex justify-content-end mt-1 mb-0">
        <button type="submit" class="btn text-white px-4 py-2" style="background-color: #0D99FF;" form="formWarta">
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
