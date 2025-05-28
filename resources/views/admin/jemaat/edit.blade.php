@extends('layouts.admin')

@section('title', 'Edit Data Jemaat') {{-- Judul diubah --}}

@section('content')
<div class="container mt-3 mb-4">
    <div class="row justify-content-center">
        <div class="col-lg-10">
             <div class="card shadow-sm">
                <div class="card-header">
                    <h5 class="fw-semibold mb-0 py-2">Formulir Edit Data Jemaat: {{ $jemaat->nama }}</h5>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger py-2 px-3 mb-3" style="font-size: 14px;">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- Form Edit Jemaat --}}
                    <form action="{{ route('admin.jemaat.update', $jemaat->id) }}" method="POST"> {{-- Action diubah ke update --}}
                        @csrf
                        @method('PUT') {{-- Method untuk update --}}

                        <div class="row g-4">
                            <!-- Kolom Kiri -->
                            <div class="col-md-6">
                                <div class="mb-3"> {{-- class mb-4 diubah jadi mb-3 untuk konsistensi --}}
                                    <label for="nama" class="form-label fw-semibold">Nama Lengkap <span class="text-danger">*</span></label>
                                    <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama', $jemaat->nama) }}" required>
                                    @error('nama')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="jenis_kelamin" class="form-label fw-semibold">Jenis Kelamin <span class="text-danger">*</span></label>
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-select @error('jenis_kelamin') is-invalid @enderror" required>
                                        <option value="">-- Pilih Jenis Kelamin --</option>
                                        <option value="Laki-laki" {{ old('jenis_kelamin', $jemaat->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                        <option value="Perempuan" {{ old('jenis_kelamin', $jemaat->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                    </select>
                                     @error('jenis_kelamin')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="tanggal_lahir" class="form-label fw-semibold">Tanggal Lahir <span class="text-danger">*</span></label>
                                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{ old('tanggal_lahir', $jemaat->tanggal_lahir ? $jemaat->tanggal_lahir->format('Y-m-d') : '') }}" required max="{{ now()->toDateString() }}">
                                    @error('tanggal_lahir')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Kolom Kanan -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="status_pernikahan" class="form-label fw-semibold">Status Pernikahan <span class="text-danger">*</span></label>
                                    <select name="status_pernikahan" id="status_pernikahan" class="form-select @error('status_pernikahan') is-invalid @enderror" required>
                                        <option value="">-- Pilih Status --</option>
                                        <option value="Belum Menikah" {{ old('status_pernikahan', $jemaat->status_pernikahan) == 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah</option>
                                        <option value="Menikah" {{ old('status_pernikahan', $jemaat->status_pernikahan) == 'Menikah' ? 'selected' : '' }}>Menikah</option>
                                        <option value="Cerai" {{ old('status_pernikahan', $jemaat->status_pernikahan) == 'Cerai' ? 'selected' : '' }}>Cerai</option>
                                    </select>
                                    @error('status_pernikahan')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="alamat" class="form-label fw-semibold">Alamat Lengkap <span class="text-danger">*</span></label>
                                    <textarea name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" rows="4" required>{{ old('alamat', $jemaat->alamat) }}</textarea>
                                    @error('alamat')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Field Nama Pasangan dan Jumlah Anak dihapus --}}
                            </div>
                        </div>

                        <!-- Tombol Aksi -->
                        <div class="d-flex justify-content-between mt-4 mb-0">
                            <a href="{{ route('admin.jemaat.index') }}" class="btn btn-secondary px-4 py-2">
                                <i class="fas fa-arrow-left me-1"></i> Kembali
                            </a>
                            <button type="submit" class="btn btn-primary px-4 py-2">
                                <i class="fas fa-save me-1"></i> Update Data
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
{{-- Hapus style custom-form-control jika tidak dipakai global, atau sesuaikan --}}
{{-- <style>
    .custom-form-control {
        height: 45px;
        font-size: 16px;
    }
</style> --}}
@endsection

@section('scripts')
{{-- Script toggleFields dihapus --}}
@endsection