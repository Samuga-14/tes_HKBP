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
                            <select name="status_pernikahan" id="status_pernikahan" class="form-control" required>
                                <option value="">-- Pilih Status --</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                                <option value="Menikah">Menikah</option>
                                <option value="Cerai">Cerai</option>
                                <option value="Duda / Janda">Duda / Janda</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="nama_pasangan" class="form-label fw-semibold">Nama Pasangan (Opsional)</label>
                            <input type="text" name="nama_pasangan" id="nama_pasangan" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="jumlah_anak" class="form-label fw-semibold">Jumlah Anak</label>
                            <input type="number" name="jumlah_anak" id="jumlah_anak" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nama Anak</label>
                            <div id="nama-anak-wrapper">
                                <input type="text" name="nama_anak[]" class="form-control mb-2" required>
                            </div>
                            <button type="button" class="btn btn-sm btn-outline-primary" onclick="tambahInputNamaAnak()">+ Tambah Nama Anak</button>
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
    function tambahInputNamaAnak() {
        const wrapper = document.getElementById('nama-anak-wrapper');
        const input = document.createElement('input');
        input.type = 'text';
        input.name = 'nama_anak[]';
        input.className = 'form-control mb-2';
        input.required = true;
        wrapper.appendChild(input);
    }
</script>
@endsection
