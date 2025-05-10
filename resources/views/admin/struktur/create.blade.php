@extends('layouts.admin')

@section('content')
<div class="container mt-3 mb-5">
    <div class="row justify-content-start"> <!-- Menggunakan justify-content-start untuk menggeser ke kiri -->
        <div class="col-lg-6"> <!-- Menjaga form berada di posisi kiri -->
            <h6 class="fw-semibold mb-4" style="font-size: 18px;">Tambah Pengurus</h6>

            @if ($errors->any())
                <div class="alert alert-danger py-2 px-3" style="font-size: 14px;">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form dengan margin kiri -->
            <form action="{{ route('admin.struktur.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="nama" class="form-label fw-semibold">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="jabatan" class="form-label fw-semibold">Jabatan</label>
                    <input type="text" name="jabatan" id="jabatan" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="gambar" class="form-label fw-semibold">Gambar</label>
                    <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*" required>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Tombol fixed di kanan bawah -->
<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 1000;">
    <form action="{{ route('admin.struktur.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <button type="submit" class="btn text-white px-4 py-2" style="background-color: #0D99FF;">
            Tambahkan
        </button>
    </form>
</div>
@endsection
