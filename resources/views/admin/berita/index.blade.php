@extends('layouts.admin')

@section('title', 'Data Berita')

@section('content')
<style>
    .table-no-border th,
    .table-no-border td {
        border: none !important;
    }

    .table-alternating tbody tr:nth-child(even) {
        background-color: #e8f0fa;
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
    .table-alternating tbody tr:nth-child(odd) {
    background-color: #ffffff;
}
.table-alternating tbody tr:nth-child(even) {
    background-color: #e8f0fa;
}

</style>

<div class="container-fluid py-3 px-4 rounded-container shadow-sm">
    <div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold mb-0" style="font-size: 24px;">Data Berita</h2>

        <a href="{{ route('admin.berita.create') }}" class="btn btn-primary fw-semibold" style="border-radius: 8px;">
            Add New <i class="fas fa-plus ms-1"></i>
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-no-border table-alternating align-middle">
        <thead style="background-color: #f4f4f4; font-size: 14px; color: #000;">


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
                    <td style="white-space: normal;">{{ Str::limit(strip_tags($item->deskripsi), 100) }}</td>
                    <td class="text-center">
                        @if ($item->gambar)
                        <img src="{{ asset($item->gambar) }}" alt="Gambar" style="width: 40px; height: 40px; object-fit: cover; border-radius: 5px;">

                        @else
                            <i class="fas fa-image fa-2x" style="color: #000;"></i>

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

    <footer class="mt-5 text-center text-muted small py-3">
    <strong>Copyright 2025</strong>. Institut Teknologi Del Kelompok PA 1
</footer>

</div>
@endsection
