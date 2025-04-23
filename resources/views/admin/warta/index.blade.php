@extends('layouts.admin')

@section('title', 'Data warta')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-gradient-primary text-white d-flex justify-content-between align-items-center py-3">
        <div class="d-flex align-items-center gap-3">
            <i class="fas fa-newspaper"></i>
            <h5 class="mb-0">Daftar warta</h5>
        </div>
    </div>
    <div class="card-body p-4">
        <div class="mb-4">
            <a href="{{ route('admin.warta.create') }}" class="btn btn-primary">
                <i class="fas fa-plus me-2"></i> Tambah warta
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr class="bg-primary text-white">
                        <th class="text-center">Judul</th>
                        <th class="text-center">Deskripsi</th>
                        <th class="text-center">File PDF</th>
                        <th class="text-center">Tanggal Publikasi</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($wartas as $item)
                        <tr class="align-middle">
                            <td>{{ $item->judul }}</td>
                            <td>{{ Str::limit($item->deskripsi, 50) }}</td>
                            <td class="text-center">
                                @if ($item->file_pdf)
                                    <a href="{{ asset('storage/' . $item->file_pdf) }}" class="btn btn-sm btn-info" target="_blank">
                                        <i class="fas fa-file-pdf"></i> Lihat PDF
                                    </a>
                                @else
                                    <span class="badge bg-secondary">Tidak ada</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <span class="badge bg-info">{{ $item->tanggal_publikasi }}</span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.warta.edit', $item->id) }}" class="btn btn-warning btn-sm" data-bs-toggle="tooltip" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.warta.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin mau hapus warta ini?')">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger btn-sm" data-bs-toggle="tooltip" title="Hapus">
        <i class="fas fa-trash"></i>
    </button>
</form>

                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-4">
                                <div class="text-muted">
                                    <i class="fas fa-inbox fa-3x mb-3"></i>
                                    <p>Tidak ada data warta</p>
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