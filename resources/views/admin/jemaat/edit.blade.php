@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4 pt-5 pb-5">

    {{-- Header Judul --}}
    <div class="mb-4 pb-2 pt-4 border-bottom">
        <h3 class="fw-semibold text-dark">Edit Data Jemaat</h3>
    </div>

    {{-- Form Edit Jemaat --}}
    <form action="{{ route('admin.jemaat.update', $jemaat->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row g-4">

            {{-- Nama Jemaat --}}
            <div class="col-md-6">
                <label for="nama" class="form-label fw-semibold">Nama Jemaat</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $jemaat->nama) }}" required>
            </div>

            {{-- Nama Pasangan --}}
            <div class="col-md-6">
                <label for="nama_pasangan" class="form-label fw-semibold">Nama Pasangan</label>
                <input type="text" class="form-control" id="nama_pasangan" name="nama_pasangan" value="{{ old('nama_pasangan', $jemaat->nama_pasangan) }}">
            </div>

            {{-- Tanggal Lahir --}}
            <div class="col-md-6">
                <label for="tanggal_lahir" class="form-label fw-semibold">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir', $jemaat->tanggal_lahir) }}" required>
            </div>

            {{-- Jumlah Anak --}}
            <div class="col-md-6">
                <label for="jumlah_anak" class="form-label fw-semibold">Jumlah Anak</label>
                <input type="number" class="form-control" id="jumlah_anak" name="jumlah_anak" min="0" value="{{ old('jumlah_anak', $jemaat->jumlah_anak) }}">
            </div>

            {{-- Jenis Kelamin --}}
            <div class="col-md-6">
                <label for="jenis_kelamin" class="form-label fw-semibold">Jenis Kelamin</label>
                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-laki" {{ old('jenis_kelamin', $jemaat->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ old('jenis_kelamin', $jemaat->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>

            {{-- Alamat --}}
            <div class="col-md-6">
                <label for="alamat" class="form-label fw-semibold">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat', $jemaat->alamat) }}" required>
            </div>

            {{-- Status Pernikahan --}}
            <div class="col-md-6">
                <label for="status_pernikahan" class="form-label fw-semibold">Status Pernikahan</label>
                <select class="form-select" id="status_pernikahan" name="status_pernikahan" required>
                    <option value="">Pilih Status Pernikahan</option>
                    <option value="Menikah" {{ old('status_pernikahan', $jemaat->status_pernikahan) == 'Menikah' ? 'selected' : '' }}>Menikah</option>
                    <option value="Belum Menikah" {{ old('status_pernikahan', $jemaat->status_pernikahan) == 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah</option>
                    <option value="Cerai" {{ old('status_pernikahan', $jemaat->status_pernikahan) == 'Cerai' ? 'selected' : '' }}>Cerai</option>
                </select>
            </div>

            {{-- Tombol Submit --}}
           <div class="col-12 d-flex justify-content-end mt-4">
    <button type="submit" class="btn btn-primary px-5 py-2 me-3">
        Edit
    </button>
</div>


        </div>
    </form>
</div>
@endsection
