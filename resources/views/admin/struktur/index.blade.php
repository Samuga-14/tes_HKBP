@extends('layouts.admin')

@section('title', 'Data Kepengurusan')

@section('content')
<div class="container-fluid px-4">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-semibold mb-0">Data Kepengurusan</h4>
        <a href="{{ route('admin.struktur.create') }}" class="btn btn-primary d-flex align-items-center gap-2">
            <i class="fas fa-plus"></i> Add New
        </a>
    </div>

    <!-- Table -->
    <div class="table-responsive">
        <table class="table table-bordered align-middle">
            <thead class="table-light text-center">
                <tr>
                    <th style="width: 50px;">No.</th>
                    <th style="width: 80px;">Gambar</th>
                    <th>Nama Anggota</th>
                    <th>Kepengurusan</th>
                    <th>Nama Jabatan</th>
                    <th style="width: 100px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($struktur as $index => $item)
                    <tr @if($index % 2 == 0) style="background-color: #f9f9fb;" @endif>
                        <td class="text-center">{{ $struktur->firstItem() + $index }}</td>
                        <td class="text-center">
                            @if ($item->gambar)
                                <img src="{{ asset('images/struktur/' . $item->gambar) }}" alt="gambar" class="rounded-circle" width="50" height="50" style="object-fit: cover;">
                            @else
                                <span class="text-muted">Tidak ada</span>
                            @endif
                        </td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->kepengurusan }}</td>
                        <td>{{ $item->jabatan }}</td>
                        <td class="text-center">
                            <a href="{{ route('admin.struktur.edit', $item->id) }}" class="text-primary me-2" title="Edit">
                                <i class="fas fa-pen-to-square"></i>
                            </a>
                            <form action="{{ route('admin.struktur.destroy', $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link p-0 m-0 text-danger" title="Hapus">
                                    <i class="fas fa-trash-can"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center py-5 text-muted">
                            <i class="fas fa-inbox fa-2x mb-2"></i>
                            <p class="mb-0">Data belum tersedia</p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-between align-items-center mt-4">
        <small>
            Menampilkan {{ $struktur->firstItem() }} - {{ $struktur->lastItem() }} dari {{ $struktur->total() }} data
        </small>
        <div>
            {{ $struktur->links() }}
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center mt-4">
        <small>
            <strong>Copyright 2025.</strong> Institut Teknologi Del Kelompok PA 1
        </small>
    </footer>
</div>
@endsection

<!-- Tambahan CSS -->
@push('styles')
<style>
    body {
        background-color: #f3f4f6;
    }
    .table th, .table td {
        vertical-align: middle;
    }
    .table td img {
        border: 2px solid #ddd;
    }
    .btn i, .btn-link i {
        font-size: 1rem;
    }
</style>
@endpush
