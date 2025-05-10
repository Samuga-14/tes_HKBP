@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4 pt-3 pb-5"> {{-- Tambah padding bawah --}}

    {{-- Header Judul --}}
    <div class="mb-4 pb-2 pt-4 border-bottom"> {{-- Menurunkan sedikit header judul --}}
        <h3 class="fw-semibold text-dark">Tambah Data Jemaat</h3> {{-- Perbesar ukuran tulisan judul --}}
    </div>

    {{-- Form Input Data Jemaat --}}
    <form action="{{ route('admin.jemaat.store') }}" method="POST">
        @csrf
        <div class="row g-4">

            {{-- Nama Jemaat --}}
            <div class="col-md-6">
                <label for="nama" class="form-label fw-semibold">Nama Jemaat</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            {{-- Nama Pasangan --}}
            <div class="col-md-6">
                <label for="nama_pasangan" class="form-label fw-semibold">Nama Pasangan</label>
                <input type="text" class="form-control" id="nama_pasangan" name="nama_pasangan">
            </div>

            {{-- Tanggal Lahir --}}
            <div class="col-md-6">
                <label for="tanggal_lahir" class="form-label fw-semibold">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
            </div>

            {{-- Jumlah Anak --}}
            <div class="col-md-6">
                <label for="jumlah_anak" class="form-label fw-semibold">Jumlah Anak</label>
                <input type="number" class="form-control" id="jumlah_anak" name="jumlah_anak" min="0" value="0">
            </div>

            {{-- Jenis Kelamin --}}
            <div class="col-md-6">
                <label for="jenis_kelamin" class="form-label fw-semibold">Jenis Kelamin</label>
                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            {{-- Alamat --}}
            <div class="col-md-6">
                <label for="alamat" class="form-label fw-semibold">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>

            {{-- Status Pernikahan --}}
            <div class="col-md-6">
                <label for="status_pernikahan" class="form-label fw-semibold">Status Pernikahan</label>
                <select class="form-select" id="status_pernikahan" name="status_pernikahan" required>
                    <option value="">Pilih Status Pernikahan</option>
                    <option value="Menikah">Menikah</option>
                    <option value="Belum Menikah">Belum Menikah</option>
                    <option value="Tidak Menikah">Cerai</option>
                </select>
            </div>
        </div>

        {{-- Tombol Submit --}}
        <div class="d-flex justify-content-end mt-5"> {{-- Menurunkan tombol lebih sedikit --}}
            <button type="submit" class="btn btn-primary px-4 py-2">Tambahkan</button>
        </div>
    </form>

</div>
@endsection
