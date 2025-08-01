@extends('layouts.admin')

@section('content')
<div class="container mt-3 mb-4">
    <div class="row justify-content-center">
        <div class="col-lg-12 ps-4">
            <h6 class="fw-semibold mb-4" style="font-size: 18px; margin-left: 4px;">Tambah Galeri</h6>

            @if ($errors->any())
                <div class="alert alert-danger py-2 px-3" style="font-size: 14px;">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data" id="formGaleri">
                @csrf
                <div class="row">
                    <!-- Kolom Kiri -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="judul" class="form-label fw-semibold">Judul</label>
                            <input type="text" name="judul" id="judul" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="gambar" class="form-label fw-semibold">Gambar</label>
                            <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*">
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label fw-semibold">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" rows="5" class="form-control" required></textarea>
                        </div>
                    </div>

                    <!-- Kolom Kanan -->
                    <div class="col-md-6">                    
                    <div class="mb-3">
                        <label for="link_google_foto" class="form-label fw-semibold">Link Google Foto</label>
                        <input type="url" name="link_foto" id="link_foto" class="form-control" placeholder="https://photos.app.goo.gl/..." />
                    </div>
                </div>

                <!-- Tombol kembali dan submit -->
                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('admin.galeri.index') }}" class="btn btn-secondary px-4 py-2">
                        Kembali
                    </a>
                    <button type="submit" class="btn text-white px-4 py-2" style="background-color: #0D99FF;" onclick="event.preventDefault(); submitForm();">
                        Tambahkan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function submitForm() {
    document.getElementById('formGaleri').submit();
    window.location.href = "{{ route('admin.galeri.index') }}";
}
</script>
@endsection