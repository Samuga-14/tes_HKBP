@extends('layouts.admin')

@section('content')
<div class="container mt-3 mb-4">
    <div class="row justify-content-center">
        <div class="col-lg-12 ps-4">
            <h6 class="fw-semibold mb-4" style="font-size: 18px; margin-left: 4px;">Tambah Warta Jemaat</h6>

            @if ($errors->any())
                <div class="alert alert-danger py-2 px-3" style="font-size: 14px;">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.warta.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="judul" class="form-label fw-semibold">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label fw-semibold">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" rows="4" class="form-control" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="file_pdf" class="form-label fw-semibold">Upload File PDF</label>
                    <input type="file" name="file_pdf" id="file_pdf" class="form-control" accept="application/pdf" required>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('admin.warta.index') }}" class="btn btn-secondary px-4 py-2">Kembali</a>
                    <button type="submit" class="btn text-white px-4 py-2" style="background-color: #0D99FF;">
                        Tambahkan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
