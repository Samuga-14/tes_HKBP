@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-warning text-white">
                    <h4 class="mb-0"><i class="fas fa-edit me-2"></i>Edit Galeri</h4>
                </div>
                <div class="card-body bg-light">
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

                        <div class="form-group mb-4">
                            <label for="judul" class="form-label fw-bold"><i class="fas fa-heading me-1"></i>Judul</label>
                            <input type="text" name="judul" id="judul" class="form-control form-control-lg shadow-sm" value="{{ old('judul', $galeri->judul) }}" required>
                        </div>

                        <div class="form-group mb-4">
                            <label for="deskripsi" class="form-label fw-bold"><i class="fas fa-align-left me-1"></i>Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control shadow-sm" rows="6" required>{{ old('deskripsi', $galeri->deskripsi) }}</textarea>
                        </div>

                        <div class="form-group mb-4">
                            <label for="gambar" class="form-label fw-bold"><i class="fas fa-image me-1"></i>Gambar</label>
                            @if($galeri->gambar)
                                <div class="mb-2">
                                    <img src="{{ asset($galeri->gambar) }}" alt="Gambar Galeri" class="img-thumbnail" width="200">
                                </div>
                            @endif
                            <input type="file" name="gambar" id="gambar" class="form-control shadow-sm" accept="image/*">
                            <small class="text-muted">Biarkan kosong jika tidak ingin mengubah gambar</small>
                        </div>

                        <div class="form-group mb-4">
                            <label for="video" class="form-label fw-bold"><i class="fas fa-video me-1"></i>Video</label>
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

                        <div class="form-group mb-4">
                            <label for="tanggal_unggah" class="form-label fw-bold"><i class="fas fa-calendar-alt me-1"></i>Tanggal Unggah</label>
                            <input type="date" name="tanggal_unggah" id="tanggal_unggah" class="form-control shadow-sm"
    value="{{ old('tanggal_unggah', date('Y-m-d', strtotime($galeri->tanggal_unggah))) }}" required>

                        </div>

                        <div class="d-flex gap-3">
                            <button type="submit" class="btn btn-warning text-white px-4">
                                <i class="fas fa-save me-1"></i> Update
                            </button>
                            <a href="{{ route('admin.galeri.index') }}" class="btn btn-danger px-4">
                                <i class="fas fa-times me-1"></i> Batal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
