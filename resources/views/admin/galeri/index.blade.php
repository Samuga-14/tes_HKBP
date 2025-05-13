@extends('layouts.admin')

@section('title', 'Data Galeri')

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
        padding: 14px 12px; /* Sedikit lebih tebal */
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
        <h5 class="table-title">Data Galeri Kegiatan</h5>
        <a href="{{ route('admin.galeri.create') }}" class="btn-add">
            Add New <i class="fas fa-plus"></i>
        </a>
    </div>

    <div class="table-responsive">
        <table class="table align-middle">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Gambar</th>
                    <th>Deskripsi</th>
                    <th>Tanggal Publikasi</th>
                    <th>Video</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($galeri as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td style="max-width: 200px">{{ $item->judul }}</td>
                        <td>
                            @if ($item->gambar)
                                <img src="{{ asset('images/galeri/' . $item->gambar) }}" alt="gambar" class="img-thumbnail">
                            @else
                                <span class="text-muted">-</span>
                            @endif
                        </td>
                        <td style="max-width: 250px">{{ Str::limit(strip_tags($item->deskripsi), 50) }}</td>
                        <td>
                            <div class="icon-label">
                                <i class="fas fa-calendar-alt text-muted"></i>
                                {{ \Carbon\Carbon::parse($item->tanggal_unggah)->format('d M Y') }}
                            </div>
                        </td>
                        <td>
                            <div class="icon-label">
                                @if ($item->video)
                                    <i class="fas fa-video text-success"></i> <span class="text-muted">Ada</span>
                                @else
                                    <i class="fas fa-video-slash text-muted"></i> <span class="text-muted">-</span>
                                @endif
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('admin.galeri.edit', $item->id) }}" class="icon-action text-primary" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.galeri.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin mau hapus galeri ini?')">
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
                        <td colspan="7" class="text-center text-muted py-4">
                            <i class="fas fa-inbox fa-2x mb-2"></i>
                            <p>Tidak ada data galeri</p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    <div class="d-flex justify-content-end">
        {{ $galeri->links() }}
    </div>
</div>

@endsection
