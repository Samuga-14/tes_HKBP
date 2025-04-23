@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0"><i class="fas fa-newspaper me-2"></i>Tambah jemaat</h4>
                </div>
                <div class="card-body bg-light">
                    <form action="{{ route('admin.jemaat.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-4">
                            <label for="nama" class="form-label fw-bold"><i class="fas fa-user me-1"></i>Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control form-control-lg shadow-sm" placeholder="Masukkan nama jemaat" required>
                        </div>

                        <div class="form-group mb-4">
                            <label for="tanggal_lahir" class="form-label fw-bold"><i class="fas fa-calendar me-1"></i>Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control shadow-sm" required>
                        </div>

                        <div class="form-group mb-4">
                            <label for="jenis_kelamin" class="form-label fw-bold"><i class="fas fa-venus-mars me-1"></i>Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control shadow-sm" required>
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group mb-4">
                            <label for="alamat" class="form-label fw-bold"><i class="fas fa-map-marker-alt me-1"></i>Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control shadow-sm" rows="3" placeholder="Masukkan alamat lengkap" required></textarea>
                        </div>

                        <div class="form-group mb-4">
                            <label for="status_pernikahan" class="form-label fw-bold"><i class="fas fa-ring me-1"></i>Status Pernikahan</label>
                            <select name="status_pernikahan" id="status_pernikahan" class="form-control shadow-sm" required>
                                <option value="">Pilih Status Pernikahan</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                                <option value="Menikah">Menikah</option>
                                <option value="Cerai">Cerai</option>
                            </select>
                        </div>

                        <div class="form-group mb-4">
                            <label for="nama_pasangan" class="form-label fw-bold"><i class="fas fa-user-plus me-1"></i>Nama Pasangan</label>
                            <input type="text" name="nama_pasangan" id="nama_pasangan" class="form-control shadow-sm" placeholder="Masukkan nama pasangan (jika ada)">
                        </div>

                        <div class="form-group mb-4">
                            <label for="jumlah_anak" class="form-label fw-bold"><i class="fas fa-child me-1"></i>Jumlah Anak</label>
                            <input type="number" name="jumlah_anak" id="jumlah_anak" class="form-control shadow-sm" placeholder="Masukkan jumlah anak" min="0" value="0">
                        </div>

                        <div class="d-flex gap-3">
                            <button type="submit" class="btn btn-primary px-4">
                                <i class="fas fa-save me-1"></i> Simpan
                            </button>
                            <a href="{{ route('admin.jemaat.index') }}" class="btn btn-danger px-4">
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