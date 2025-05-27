@extends('layouts.admin')

@section('content')
<div class="container mt-3 mb-0 position-relative">
    <div class="row">
        <div class="col-12">
            <h6 class="fw-semibold mb-4" style="font-size: 18px;">Tambah Jemaat</h6>

            @if ($errors->any())
                <div class="alert alert-danger py-2 px-3" style="font-size: 14px;">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form Tambah Jemaat -->
            <form action="{{ route('admin.jemaat.store') }}" method="POST">
                @csrf

                <div class="row g-4">
                    <!-- Kolom Kiri -->
                    <div class="col-md-6 pe-md-4">
                        <div class="mb-4">
                            <label for="nama" class="form-label fw-semibold">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control custom-form-control" required>
                        </div>

                        <div class="mb-4">
                            <label for="jenis_kelamin" class="form-label fw-semibold">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control custom-form-control" required>
                                <option value="">-- Pilih Jenis Kelamin --</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="tanggal_lahir" class="form-label fw-semibold">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control custom-form-control">
                        </div>

                        <div class="mb-4">
                            <label for="alamat" class="form-label fw-semibold">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control" rows="6" required></textarea>
                        </div>
                    </div>

                    <!-- Kolom Kanan -->
                    <div class="col-md-6 ps-md-4">
                        <div class="mb-4">
                            <label for="status_pernikahan" class="form-label fw-semibold">Status Pernikahan</label>
                            <select name="status_pernikahan" id="status_pernikahan" class="form-control custom-form-control" required>
                                <option value="">-- Pilih Status --</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                                <option value="Menikah">Menikah</option>
                                <option value="Cerai">Cerai</option>
                                <option value="Duda / Janda">Duda / Janda</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="nama_pasangan" class="form-label fw-semibold">Nama Pasangan (Opsional)</label>
                            <input type="text" name="nama_pasangan" id="nama_pasangan" class="form-control custom-form-control">
                        </div>

                        <div class="mb-4">
                            <label for="jumlah_anak" class="form-label fw-semibold">Jumlah Anak</label>
                            <input type="number" name="jumlah_anak" id="jumlah_anak" class="form-control custom-form-control" required>
                        </div>

                        <div class="mb-4">
                            <label for="nama_anak" class="form-label fw-semibold">Nama Anak</label>
                            <input type="text" name="nama_anak" id="nama_anak" class="form-control custom-form-control" required>
                        </div>
                    </div>
                </div>

                <!-- Tombol Aksi -->
                <div class="d-flex justify-content-between mt-4 mb-0">
                    <a href="{{ route('admin.jemaat.index') }}" class="btn btn-secondary px-4 py-2">
                        Kembali
                    </a>
                    <button type="submit" class="btn text-white px-4 py-2" style="background-color: #0D99FF;">
                        Tambahkan
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
