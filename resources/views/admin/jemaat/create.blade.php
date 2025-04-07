@extends('layouts.admin')
@section('title', 'Tambah Data Jemaat')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header bg-primary">
                    <h5 class="text-white mb-0">
                        <i class="fas fa-user-plus mr-2"></i> Form Tambah Data Jemaat
                    </h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.jemaat.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama"><i class="fas fa-user text-primary"></i> Nama Lengkap</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" required>
                                    @error('nama')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="jenis_kelamin"><i class="fas fa-venus-mars text-info"></i> Jenis Kelamin</label>
                                    <select class="form-control @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin" name="jenis_kelamin" required>
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                        <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan</option>
                                    </select>
                                    @error('jenis_kelamin')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="alamat"><i class="fas fa-home text-warning"></i> Alamat</label>
                                    <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="3" required>{{ old('alamat') }}</textarea>
                                    @error('alamat')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="status_pernikahan"><i class="fas fa-info-circle text-orange"></i> Status Pernikahan</label>
                                    <select class="form-control @error('status_pernikahan') is-invalid @enderror" id="status_pernikahan" name="status_pernikahan" required>
                                        <option value="">Pilih Status Pernikahan</option>
                                        <option value="Menikah" {{ old('status_pernikahan') == 'Menikah' ? 'selected' : '' }}>Menikah</option>
                                        <option value="Tidak Menikah" {{ old('status_pernikahan') == 'Tidak Menikah' ? 'selected' : '' }}>Tidak Menikah</option>
                                    </select>
                                    @error('status_pernikahan')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="no_hp"><i class="fas fa-phone text-purple"></i> Nama Pasangan</label>
                                    <input type="text" class="form-control @error('nama_pasangan') is-invalid @enderror" id="nama_pasangan" name="nama_pasangan" value="{{ old('nama_pasangan') }}" required>
                                    @error('no_hp')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="no_hp"><i class="fas fa-phone text-purple"></i>Jumlah Anak / Tanggungan</label>
                                    <input type="text" class="form-control @error('jumlah_anak') is-invalid @enderror" id="jumlah_anak" name="jumlah_anak" value="{{ old('jumlah_anak') }}" required>
                                    @error('no_hp')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="text-right mt-4">
                            <a href="{{ route('admin.jemaat.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left mr-2"></i>Kembali
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save mr-2"></i>Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    // Show filename in custom file input
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script>
@endpush
@endsection
