@extends('layouts.admin')

@section('content')
<div class="container mt-3 mb-4">
    <div class="row justify-content-center">
        <div class="col-lg-12 ps-4">
            <h6 class="fw-semibold mb-4" style="font-size: 18px; margin-left: 4px;">Tambah Jemaat</h6>

            @if ($errors->any())
                <div class="alert alert-danger py-2 px-3" style="font-size: 14px;">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.jemaat.store') }}" method="POST">
                @csrf
                <div class="row">
                    <!-- Kolom Kiri -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nama" class="form-label fw-semibold">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label fw-semibold">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                                <option value="">-- Pilih Jenis Kelamin --</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="tanggal_lahir" class="form-label fw-semibold">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label fw-semibold">Alamat</label>
                            <textarea name="alamat" id="alamat" rows="3" class="form-control" required></textarea>
                        </div>
                    </div>

                    <!-- Kolom Kanan -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="status_pernikahan" class="form-label fw-semibold">Status Pernikahan</label>
                            <select name="status_pernikahan" id="status_pernikahan" class="form-control" required onchange="toggleFields()">
                                <option value="">-- Pilih Status --</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                                <option value="Menikah">Menikah</option>
                                <option value="Cerai">Cerai</option>
                                <option value="Duda / Janda">Duda / Janda</option>
                            </select>
                        </div>

                        <div class="mb-3" id="nama_pasangan_div">
                            <label for="nama_pasangan" class="form-label fw-semibold">Nama Pasangan</label>
                            <input type="text" name="nama_pasangan" id="nama_pasangan" class="form-control">
                        </div>

                        <div class="mb-3" id="jumlah_anak_div">
                            <label for="jumlah_anak" class="form-label fw-semibold">Jumlah Anak</label>
                            <input type="number" name="jumlah_anak" id="jumlah_anak" class="form-control">
                        </div>
                    </div>
                </div>

                <!-- Tombol Kembali dan Tambahkan -->
                <div class="d-flex justify-content-between mt-4">
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

<script>
    function toggleFields() {
        const statusPernikahan = document.getElementById('status_pernikahan').value;
        const namaPasanganDiv = document.getElementById('nama_pasangan_div');
        const jumlahAnakDiv = document.getElementById('jumlah_anak_div');
        const namaPasanganInput = document.getElementById('nama_pasangan');
        const jumlahAnakInput = document.getElementById('jumlah_anak');

        if (statusPernikahan === 'Menikah') {
            namaPasanganDiv.style.display = 'block';
            jumlahAnakDiv.style.display = 'block';
            namaPasanganInput.required = true;
            jumlahAnakInput.required = true;
        } else {
            namaPasanganDiv.style.display = 'block';
            jumlahAnakDiv.style.display = 'block';
            namaPasanganInput.required = false;
            jumlahAnakInput.required = false;
        }
    }

    // Run on page load
    document.addEventListener('DOMContentLoaded', function() {
        toggleFields();
    });
</script>
@endsection