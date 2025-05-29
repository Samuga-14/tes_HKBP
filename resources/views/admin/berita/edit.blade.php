@extends('layouts.admin')

@section('content')
<div class="container mt-3 mb-0 position-relative">
    <div class="row">
        <div class="col-12">
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

            <!-- Form Edit Berita -->
            <form id="formBerita" action="{{ route('admin.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row g-4">
                    <!-- Kolom Kiri -->
                    <div class="col-md-6 pe-md-4">
                        <div class="mb-4">
                            <label for="judul" class="form-label fw-semibold">Judul</label>
                            <input type="text" name="judul" id="judul" class="form-control custom-form-control"
                                value="{{ old('judul', $berita->judul) }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="deskripsi" class="form-label fw-semibold">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="6" required>{{ old('deskripsi', $berita->deskripsi) }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label for="tipe" class="form-label fw-semibold">Jenis Konten</label>
                            <select name="tipe" id="tipe" class="form-control custom-form-control" required>
                                <option value="berita" {{ old('tipe', $berita->tipe) == 'berita' ? 'selected' : '' }}>Berita Umum</option>
                                <option value="ayat_harian" {{ old('tipe', $berita->tipe) == 'ayat_harian' ? 'selected' : '' }}>Ayat Harian</option>
                            </select>
                        </div>
                    </div>

                    <!-- Kolom Kanan -->
                    <div class="col-md-6 ps-md-4">
                        <div class="mb-4">
                            <label for="gambar" class="form-label fw-semibold">Gambar (Opsional)</label>
                            @if ($berita->gambar)
                                <div class="mb-2">
                                    <img src="{{ asset('images/berita/' . $berita->gambar) }}" alt="Gambar Berita"
                                        class="img-thumbnail" style="max-height: 200px;">
                                    <p class="mt-1" style="font-size: 14px;">Gambar saat ini: <strong>{{ $berita->gambar }}</strong></p>
                                </div>
                            @endif
                            <input type="file" name="gambar" id="gambar" class="form-control custom-form-control" accept="image/*">
                            <small class="text-muted" style="font-size: 13px;">Kosongkan jika tidak ingin mengubah gambar.</small>
                        </div>
                    </div>
                </div>

                <!-- Tombol kembali dan edit -->
                <div class="d-flex justify-content-between mt-4 mb-0">
                    <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary px-4 py-2">
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
