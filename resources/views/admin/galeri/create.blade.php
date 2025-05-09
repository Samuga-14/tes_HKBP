@extends('layouts.admin')

@section('content')
<div class="container mt-4 mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="p-5 shadow-sm bg-white" style="border-radius: 12px;">

                <h4 class="fw-semibold mb-4">Tambah Galeri</h4>

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
                    <div class="row">
                        <!-- Kolom Kiri -->
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="judul" class="form-label fw-semibold">Judul</label>
                                <input type="text" name="judul" id="judul" class="form-control shadow-sm" required>
                            </div>

                            <div class="mb-4">
                                <label for="gambar" class="form-label fw-semibold">Gambar</label>
                                <input type="file" name="gambar" id="gambar" class="form-control shadow-sm" accept="image/*">
                            </div>

                            <div class="mb-4">
                                <label for="deskripsi" class="form-label fw-semibold">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" rows="5" class="form-control shadow-sm" required></textarea>
                            </div>
                        </div>

                        <!-- Kolom Kanan -->
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="video" class="form-label fw-semibold">Video</label>
                                <input type="file" name="video" id="video" class="form-control shadow-sm" accept="video/*">
                            </div>

                            <div class="mb-4">
                                <label for="tanggal_unggah" class="form-label fw-semibold">Tanggal Unggah</label>
                                <input type="date" name="tanggal_unggah" id="tanggal_unggah" class="form-control shadow-sm" required>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn text-white px-4 py-2" style="background-color: #0D99FF;">
                            Tambahkan
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
