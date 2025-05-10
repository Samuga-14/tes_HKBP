@extends('layouts.admin')

@section('title', 'Data Struktur Kepengurusan')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-gradient-primary text-white d-flex justify-content-between align-items-center py-3">
        <div class="d-flex align-items-center gap-3">
            <i class="fas fa-users"></i>
            <h5 class="mb-0">Data Kepengurusan</h5>
        </div>
    </div>
    <div class="card-body p-4">
        <div class="mb-4 d-flex justify-content-between align-items-center">
            <a href="{{ route('admin.struktur.create') }}" class="btn btn-primary">
                <i class="fas fa-plus me-2"></i> Tambah Struktur Kepengurusan
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr class="bg-primary text-white">
                        <th class="text-center">No.</th>
                        <th class="text-center">Gambar</th>
                        <th class="text-center">Nama Anggota</th>
                        <th class="text-center">Kepengurusan</th>
                        <th class="text-center">Nama Jabatan</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($struktur as $index => $item)
                        <tr class="align-middle">
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td class="text-center">
                                @if ($item->gambar)
                                    <img src="{{ asset('images/struktur/' . $item->gambar) }}" alt="gambar" class="img-thumbnail" width="80">
                                @else
                                    <span class="badge bg-secondary">Tidak ada</span>
                                @endif
                            </td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->kepengurusan }}</td>
                            <td>{{ $item->jabatan }}</td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.struktur.edit', $item->id) }}" class="btn btn-warning btn-sm" data-bs-toggle="tooltip" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.struktur.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin mau hapus?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-4">
                                <div class="text-muted">
                                    <i class="fas fa-inbox fa-3x mb-3"></i>
                                    <p>Tidak ada data struktur kepengurusan</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
