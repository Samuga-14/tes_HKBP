@extends('layouts.admin')

@section('title', 'Data Berita')

@section('content')
<style>
    .table-no-border th,
    .table-no-border td {
        border: none !important;
    }

    .table-alternating tbody tr:nth-child(odd) {
        background-color: #ffffff; /* putih */
    }

    .table-alternating tbody tr:nth-child(even) {
        background-color: #f0f8ff; /* biru muda */
    }

    .table-alternating tbody tr:hover {
        background-color: #dbeeff;
    }

    .icon-btn {
        background: none;
        border: none;
        padding: 0;
        cursor: pointer;
    }

    .icon-btn i {
        font-size: 1.2rem;
    }

    .rounded-container {
        border-radius: 20px;
        padding: 20px;
        background-color: white;
    }

    .add-button {
        border-radius: 8px;
        padding: 8px 20px;
        font-size: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #007bff;
        color: white;
        font-weight: bold;
        text-transform: uppercase;
    }

    .add-button i {
        margin-left: 8px;
    }

    .table th, .table td {
        padding: 12px 15px;
    }

    .table th {
        background-color: #f4f4f4;
        font-size: 14px;
        color: #000;
    }

    .table td {
        font-size: 13px;
    }

    .table .text-center {
        text-align: center;
    }

    .table td i {
        font-size: 1.2rem;
        cursor: pointer;
    }

    .container-fluid {
        padding: 30px;
    }
</style>

<div class="container-fluid py-3 px-4 rounded-container shadow-sm">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold mb-0" style="font-size: 24px;">Data Berita</h2>

        <a href="{{ route('admin.berita.create') }}" class="add-button">
            Add New <i class="fas fa-plus"></i>
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-no-border table-alternating align-middle">
            <thead>
                <tr>
                    <th style="width: 5%;">No.</th>
                    <th style="width: 20%;">Judul</th>
                    <th style="width: 35%;">Deskripsi</th>
                    <th style="width: 10%;" class="text-center">Gambar</th>
                    <th style="width: 15%;" class="text-center">Tanggal Publikasi</th>
                    <th style="width: 15%;" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($beritas as $index => $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ Str::limit(strip_tags($item->deskripsi), 100) }}</td>
                    <td class="text-center">
                        @if ($item->gambar)
                        <img src="{{ asset($item->gambar) }}" alt="Gambar" style="width: 40px; height: 40px; object-fit: cover; border-radius: 5px;">
                        @else
                        <i class="fas fa-image fa-2x" style="color: #007bff;"></i>
                        @endif
                    </td>
                    <td class="text-center">{{ \Carbon\Carbon::parse($item->tanggal_publikasi)->translatedFormat('d F Y') }}</td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center gap-3">
                            <a href="{{ route('admin.berita.edit', $item->id) }}" class="text-primary" title="Edit">
                                <i class="fas fa-edit fa-lg"></i>
                            </a>
                            <form action="{{ route('admin.berita.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus berita ini?')" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="icon-btn text-danger" title="Hapus">
                                    <i class="fas fa-trash-alt fa-lg"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center text-muted py-4">
                        <i class="fas fa-inbox fa-3x mb-2"></i><br>
                        Tidak ada data berita.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
