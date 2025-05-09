@extends('layouts.admin')

@section('title', 'Edit Galeri')

@section('content')
<div class="container mt-4 mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="p-5 shadow-sm bg-white" style="border-radius: 12px;">
                <h4 class="fw-semibold mb-4">Edit Galeri Kegiatan</h4>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <!-- Kolom Kiri -->
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="judul" class="form-label fw-semibold">Judul</label>
                                <input type="text" name="judul" id="judul" class="form-control shadow-sm" value="{{ old('judul', $galeri->judul) }}" required>
                            </div>

                            <div class="mb-4">
                                <label for="gambar" class="form-label fw-semibold">Gambar</label>
                                @if($galeri->gambar)
                                    <div class="mb-2">
                                        <img src="{{ asset($galeri->gambar) }}" alt="Gambar Galeri" class="img-thumbnail" style="max-width: 200px;">
                                    </div>
                                @endif
                                <input type="file" name="gambar" id="gambar" class="form-control shadow-sm" accept="image/*">
                                <small class="text-muted">Biarkan kosong jika tidak ingin mengubah gambar</small>
                            </div>

                            <div class="mb-4">
                                <label for="deskripsi" class="form-label fw-semibold">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" rows="5" class="form-control shadow-sm" required>{{ old('deskripsi', $galeri->deskripsi) }}</textarea>
                            </div>
                        </div>

                        <!-- Kolom Kanan -->
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="video" class="form-label fw-semibold">Video</label>
                                @if($galeri->video)
                                    <div class="mb-2">
                                        <video width="300" controls>
                                            <source src="{{ asset($galeri->video) }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                @endif
                                <input type="file" name="video" id="video" class="form-control shadow-sm" accept="video/*">
                                <small class="text-muted">Biarkan kosong jika tidak ingin mengubah video</small>
                            </div>

                            <div class="mb-4">
                                <label for="tanggal_unggah" class="form-label fw-semibold">Tanggal Unggah</label>
                                <input type="date" name="tanggal_unggah" id="tanggal_unggah" class="form-control shadow-sm"
                                       value="{{ old('tanggal_unggah', date('Y-m-d', strtotime($galeri->tanggal_unggah))) }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn text-white px-4 py-2" style="background-color: #0D99FF;">
                            Update
                        </button>
                        <a href="{{ route('admin.galeri.index') }}" class="btn btn-danger px-4 py-2 ms-2">
                            Batal
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
