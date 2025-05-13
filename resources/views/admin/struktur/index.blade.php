@extends('layouts.admin')

@section('title', 'Data Struktur Kepengurusan')

@section('content')

<link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;600&display=swap" rel="stylesheet">

<style>
    * {
        font-family: 'Kumbh Sans', sans-serif;
    }

    .table-container {
        background: #fff;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    }

    .table-title {
        font-size: 22px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .btn-add {
        background-color: #0d6efd;
        color: white;
        padding: 10px 18px;
        border-radius: 10px;
        font-weight: 500;
        font-size: 14px;
        display: flex;
        align-items: center;
        gap: 8px;
        text-decoration: none;
    }

    .table th {
        background-color: #f4f4f4;
        font-size: 15px;
        padding: 14px 12px;
        color: #000;
        font-weight: 600;
    }

    table tr {
        border-bottom: 1px solid #f0f0f0;
    }

    table td, table th {
        vertical-align: middle;
        font-size: 14px;
        padding: 12px;
    }

    .img-thumbnail {
        border-radius: 10px;
        object-fit: cover;
        width: 55px;
        height: 55px;
    }

    .icon-action {
        background: none;
        border: none;
        font-size: 18px;
        cursor: pointer;
        margin: 0 4px;
    }

    .pagination {
        justify-content: end;
        margin-top: 25px;
    }

    .pagination .page-item .page-link {
        border-radius: 10px;
        margin: 0 4px;
    }

    .icon-label i {
        font-size: 18px;
    }
</style>

<div class="table-container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="table-title">Data Struktur Kepengurusan</h5>
        <a href="{{ route('admin.struktur.create') }}" class="btn-add">
            Add New <i class="fas fa-plus"></i>
        </a>
    </div>

    <div class="table-responsive">
        <table class="table align-middle">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Gambar</th>
                    <th>Jabatan</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($struktur as $index => $item)
                    <tr>
                        <td>{{ $struktur->firstItem() + $index }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>
                            @if ($item->gambar)
                                <img src="{{ asset('images/struktur/' . $item->gambar) }}" alt="gambar" class="img-thumbnail">
                            @else
                                <span class="text-muted">-</span>
                            @endif
                        </td>
                        <td>{{ $item->jabatan }}</td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('admin.struktur.edit', $item->id) }}" class="icon-action text-primary" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.struktur.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="icon-action text-danger" title="Hapus">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted py-4">
                            <i class="fas fa-inbox fa-2x mb-2"></i>
                            <p>Data belum tersedia</p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    <div class="d-flex justify-content-between align-items-center mt-4">
        <small>
            Menampilkan {{ $struktur->firstItem() }} - {{ $struktur->lastItem() }} dari {{ $struktur->total() }} data
        </small>
        <div>
            {{ $struktur->links() }}
        </div>
    </div>
</div>
@endsection
