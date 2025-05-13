    @extends('layouts.admin')

    @section('content')
    <div class="container mt-3 mb-5 position-relative">
        <div class="row">
            <div class="col-lg-6">
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

                <!-- Form -->
                <form id="formStruktur" action="{{ route('admin.struktur.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <label for="nama" class="form-label fw-semibold">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control custom-form-control" required>
                    </div>

                    <div class="mb-4">
                        <label for="jabatan" class="form-label fw-semibold">Jabatan</label>
                        <input type="text" name="jabatan" id="jabatan" class="form-control custom-form-control" required>
                    </div>

                    <div class="mb-4">
                        <label for="gambar" class="form-label fw-semibold">Gambar</label>
                        <input type="file" name="gambar" id="gambar" class="form-control custom-form-control" accept="image/*" required>
                    </div>
                </form>
            </div>
        </div>

   <!-- Tombol fixed kanan bawah, dinaikkan dan digeser sedikit ke kiri -->
<div class="position-fixed" style="bottom: 150px; right: 60px; z-index: 999;">
    <button type="submit" class="btn text-white px-4 py-2" style="background-color: #0D99FF;" form="formStruktur">
        Tambahkan
    </button>
</div>


    </div>

    @endsection

    @section('styles')
    <style>
        .custom-form-control {
            height: 45px; /* Menyesuaikan tinggi input */
            font-size: 16px; /* Menyesuaikan ukuran font */
        }
    </style>
    @endsection
