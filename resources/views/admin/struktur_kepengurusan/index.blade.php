@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data struktur_kepengurusan</h1>
        <a href="{{ route('admin.struktur_kepengurusan.create') }}" class="btn btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm"></i> Tambah struktur_kepengurusan
        </a>
    </div>

    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar struktur_kepengurusan</h6>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Status Pernikahan</th>
                            <th>Nama Pasangan</th>
                            <th>Jumlah Anak</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($struktur as $struktur_kepengurusan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $struktur_kepengurusan->nama }}</td>
                            <td>{{ $struktur_kepengurusan->jenis_kelamin }}</td>
                            <td>{{ $struktur_kepengurusan->tanggal_lahir }}</td>
                            <td>{{ $struktur_kepengurusan->alamat }}</td>
                            <td>{{ $struktur_kepengurusan->status_pernikahan }}</td>
                            <td>{{ $struktur_kepengurusan->nama_pasangan }}</td>
                            <td>{{ $struktur_kepengurusan->jumlah_anak }}</td>
                            <td>
                                <span class="badge badge-{{ $struktur_kepengurusan->status == 'Aktif' ? 'success' : 'danger' }}">
                                    {{ $struktur_kepengurusan->status }}
                                </span>
                            </td>
                            <td class="text-center">
                                <a href="{{ route('admin.struktur_kepengurusan.show', $struktur_kepengurusan->id) }}" class="btn btn-info btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.struktur_kepengurusan.edit', $struktur_kepengurusan->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.struktur_kepengurusan.destroy', $struktur_kepengurusan->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center">Tidak ada data struktur_kepengurusan</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@push('style-alt')
<link href="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@push('script-alt')
<script src="{{ asset('backend/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>
@endpush
@endsection