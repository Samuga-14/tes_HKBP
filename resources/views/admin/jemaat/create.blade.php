@extends('layouts.admin')

@section('title', 'Tambah Data Jemaat Baru')

@section('content')
<div class="container-fluid py-4 px-4"> {{-- Padding utama container --}}
    <div class="row">
        <div class="col-12">
            {{-- Card header dihilangkan, judul langsung --}}
            <h5 class="font-weight-bolder mb-4">Tambah Jemaat</h5>

            {{-- Card body dihilangkan, konten form langsung --}}
            {{-- Tambahkan class untuk styling jika perlu, misal background putih & shadow jika diinginkan --}}
            {{-- Contoh: <div class="p-4 bg-white shadow-sm rounded"> --}}
            <div> {{-- Wrapper pengganti card-body, bisa ditambahkan class jika mau custom styling --}}
                @if ($errors->any())
                    <div class="alert alert-danger text-sm text-white" role="alert">
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
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                                <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" required>
                                @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-select @error('jenis_kelamin') is-invalid @enderror" required>
                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                    <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                                @error('jenis_kelamin')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir <span class="text-danger">*</span></label>
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{ old('tanggal_lahir') }}" required max="{{ now()->toDateString() }}">
                                @error('tanggal_lahir')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="status_pernikahan" class="form-label">Status Pernikahan <span class="text-danger">*</span></label>
                                <select name="status_pernikahan" id="status_pernikahan" class="form-select @error('status_pernikahan') is-invalid @enderror" required>
                                    <option value="">-- Pilih Status --</option>
                                    <option value="Belum Menikah" {{ old('status_pernikahan') == 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah</option>
                                    <option value="Menikah" {{ old('status_pernikahan') == 'Menikah' ? 'selected' : '' }}>Menikah</option>
                                    <option value="Cerai" {{ old('status_pernikahan') == 'Cerai' ? 'selected' : '' }}>Cerai</option>
                                </select>
                                @error('status_pernikahan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat Lengkap <span class="text-danger">*</span></label>
                        <textarea name="alamat" id="alamat" rows="3" class="form-control @error('alamat') is-invalid @enderror" required>{{ old('alamat') }}</textarea>
                        @error('alamat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ route('admin.jemaat.index') }}" class="btn btn-secondary">
                            Kembali
                        </a>
                        <button type="submit" class="btn btn-primary">
                            Tambahkan
                        </button>
                    </div>
                </form>
            </div>
            {{-- Akhir wrapper pengganti card-body --}}
        </div>
    </div>
</div>
@endsection