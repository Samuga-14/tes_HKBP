@extends('layouts.admin')

@section('content')
<div class="container mt-3 mb-0 position-relative">
    <div class="row">
        <div class="col-12">
            <h6 class="fw-semibold mb-4" style="font-size: 18px;">Edit Jemaat</h6>

            @if ($errors->any())
                <div class="alert alert-danger py-2 px-3" style="font-size: 14px;">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form Edit Jemaat -->
            <form id="formJemaat" action="{{ route('admin.jemaat.update', $jemaat->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Gunakan d-flex dan gap antar kolom -->
                <div class="row g-4">
                    <!-- Kolom Kiri -->
                    <div class="col-md-6 pe-md-4">
                        <div class="mb-4">
                            <label for="nama" class="form-label fw-semibold">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control custom-form-control"
                                value="{{ old('nama', $jemaat->nama) }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="jenis_kelamin" class="form-label fw-semibold">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control custom-form-control" required>
                                <option value="Laki-laki" {{ old('jenis_kelamin', $jemaat->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="Perempuan" {{ old('jenis_kelamin', $jemaat->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="tanggal_lahir" class="form-label fw-semibold">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                class="form-control custom-form-control"
                                value="{{ old('tanggal_lahir', $jemaat->tanggal_lahir ? \Carbon\Carbon::parse($jemaat->tanggal_lahir)->format('Y-m-d') : '') }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="alamat" class="form-label fw-semibold">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control" rows="6" required>{{ old('alamat', $jemaat->alamat) }}</textarea>
                        </div>
                    </div>

                    <!-- Kolom Kanan -->
                    <div class="col-md-6 ps-md-4">
                        <div class="mb-4">
                            <label for="status_pernikahan" class="form-label fw-semibold">Status Pernikahan</label>
                            <select name="status_pernikahan" id="status_pernikahan" class="form-control custom-form-control" required>
                                <option value="Belum Menikah" {{ old('status_pernikahan', $jemaat->status_pernikahan) == 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah</option>
                                <option value="Menikah" {{ old('status_pernikahan', $jemaat->status_pernikahan) == 'Menikah' ? 'selected' : '' }}>Menikah</option>
                                <option value="Cerai" {{ old('status_pernikahan', $jemaat->status_pernikahan) == 'Cerai' ? 'selected' : '' }}>Cerai</option>
                                <option value="Duda / Janda" {{ old('status_pernikahan', $jemaat->status_pernikahan) == 'Duda / Janda' ? 'selected' : '' }}>Duda / Janda</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="nama_pasangan" class="form-label fw-semibold">Nama Pasangan (Opsional)</label>
                            <input type="text" name="nama_pasangan" id="nama_pasangan" class="form-control custom-form-control"
                                value="{{ old('nama_pasangan', $jemaat->nama_pasangan) }}">
                        </div>

                        <div class="mb-4">
                            <label for="jumlah_anak" class="form-label fw-semibold">Jumlah Anak</label>
                            <input type="number" name="jumlah_anak" id="jumlah_anak" class="form-control custom-form-control"
                                value="{{ old('jumlah_anak', $jemaat->jumlah_anak) }}" required>
                        </div>
                    </div>
                </div>

                <!-- Tombol Submit -->
                <div class="d-flex justify-content-end mt-4 mb-0">
                    <button type="submit" class="btn text-white px-4 py-2" style="background-color: #0D99FF;">
                        Edit
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
