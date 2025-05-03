@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0"><i class="fas fa-user-edit me-2"></i>Edit Jemaat</h4>
                </div>
                <div class="card-body bg-light">
                    <form action="{{ route('admin.jemaat.update', $jemaat->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-4">
                            <label for="nama" class="form-label fw-bold"><i class="fas fa-user me-1"></i>Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control form-control-lg shadow-sm"
                                value="{{ old('nama', $jemaat->nama) }}" required>
                        </div>

                        <div class="form-group mb-4">
                            <label for="tanggal_lahir" class="form-label fw-bold"><i class="fas fa-calendar me-1"></i>Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control shadow-sm"
                                value="{{ old('tanggal_lahir', $jemaat->tanggal_lahir) }}" required>
                        </div>

                        <div class="form-group mb-4">
                            <label for="jenis_kelamin" class="form-label fw-bold"><i class="fas fa-venus-mars me-1"></i>Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control shadow-sm" required>
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-laki" {{ old('jenis_kelamin', $jemaat->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="Perempuan" {{ old('jenis_kelamin', $jemaat->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group mb-4">
                            <label for="alamat" class="form-label fw-bold"><i class="fas fa-map-marker-alt me-1"></i>Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control shadow-sm" rows="3" required>{{ old('alamat', $jemaat->alamat) }}</textarea>
                        </div>

                        <div class="form-group mb-4">
                            <label for="status_pernikahan" class="form-label fw-bold"><i class="fas fa-ring me-1"></i>Status Pernikahan</label>
                            <select name="status_pernikahan" id="status_pernikahan" class="form-control shadow-sm" required>
                                <option value="">Pilih Status Pernikahan</option>
                                <option value="Belum Menikah" {{ old('status_pernikahan', $jemaat->status_pernikahan) == 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah</option>
                                <option value="Menikah" {{ old('status_pernikahan', $jemaat->status_pernikahan) == 'Menikah' ? 'selected' : '' }}>Menikah</option>
                                <option value="Janda" {{ old('status_pernikahan', $jemaat->status_pernikahan) == 'Janda' ? 'selected' : '' }}>Janda</option>
                                <option value="Duda" {{ old('status_pernikahan', $jemaat->status_pernikahan) == 'Duda' ? 'selected' : '' }}>Duda</option>
                            </select>
                        </div>

                        <div class="form-group mb-4">
                            <label for="nama_pasangan" class="form-label fw-bold"><i class="fas fa-user-plus me-1"></i>Nama Pasangan</label>
                            <input type="text" name="nama_pasangan" id="nama_pasangan" class="form-control shadow-sm"
                                value="{{ old('nama_pasangan', $jemaat->nama_pasangan) }}" placeholder="Masukkan nama pasangan (jika ada)">
                        </div>

                        <div class="form-group mb-4">
                            <label for="jumlah_anak" class="form-label fw-bold"><i class="fas fa-child me-1"></i>Jumlah Anak</label>
                            <input type="number" name="jumlah_anak" id="jumlah_anak" class="form-control shadow-sm"
                                value="{{ old('jumlah_anak', $jemaat->jumlah_anak) }}" min="0">
                        </div>

                        <div class="d-flex gap-3">
                            <button type="submit" class="btn btn-primary px-4">
                                <i class="fas fa-save me-1"></i> Update
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