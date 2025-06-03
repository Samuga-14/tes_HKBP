@extends('layouts.admin')

@section('title', 'Data Berita')

@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;600;700&display=swap');

    body {
        font-family: 'Kumbh Sans', sans-serif;
    }
    
    .table-no-border th, .table-no-border td {
        border: none !important;
    }

    .table-alternating tbody tr:nth-child(odd) {
        background-color: #ffffff; /* putih */
    }

    .table-alternating tbody tr:nth-child(even) {
        background-color: #e6f0fa; /* biru muda */
    }

    .table-alternating tbody tr:hover {
        background-color: #d0e7ff; /* hover */
    }

    .rounded-container {
        border-radius: 20px;
        padding: 30px;
        background-color: white;
    }

    .add-button {
        border-radius: 8px;
        padding: 10px 18px;
        font-size: 14px;
        background-color: #0d6efd;
        color: white;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 8px;
        text-decoration: none;
    }

    .add-button i {
        font-size: 14px;
    }

    .table th, .table td {
        padding: 14px 16px;
        vertical-align: middle;
    }

    .table th {
        background-color: #f4f4f4;
        font-size: 14px;
        color: #000;
    }

    .table td {
        font-size: 13px;
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

    .table img {
        width: 36px;
        height: 36px;
        object-fit: cover;
        border-radius: 6px;
    }

        /* Popup sukses */
    .custom-success-popup {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 99999; /* Pastikan popup di atas semua elemen */
        background-color: #fff;
        padding: 40px 30px;
        border-radius: 16px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
        text-align: center;
        max-width: 90%;
        width: 350px;
        pointer-events: auto;
    }
    .custom-success-popup i {
        font-size: 80px;
        color: #28a745;
    }

    /* Pagination styling */
.pagination {
    gap: 5px;
}
.page-item .page-link {
    border-radius: 8px !important;
    border: 1px solid #dee2e6;
    color: #0d6efd;
    min-width: 38px;
    text-align: center;
}
.page-item.active .page-link {
    background-color: #0d6efd;
    border-color: #0d6efd;
    color: white;
}
.page-item.disabled .page-link {
    color: #6c757d;
}
    .form-select-sm {
        width: auto;
        display: inline-block;
    }
    .form-perpage-group label {
        margin-right: 0.5rem;
        margin-left: 0.2rem; /* Sedikit spasi setelah dropdown */
    }
    /* Styling untuk search jika ada */
    .form-search-group {
        max-width: 300px; /* Batasi lebar input search */
    }
</style>


<div class="container-fluid py-3 px-4 rounded-container shadow-sm">
    {{-- Notifikasi sukses --}}
    @if (session('success'))
        <div id="successPopup" class="custom-success-popup d-flex flex-column align-items-center justify-content-center">
            <div class="check-icon mb-3">
                <i class="fas fa-check-circle fa-5x text-success"></i>
            </div>
            <h5 class="text-center fw-bold mb-3">{{ session('success') }}</h5>
            <button class="btn btn-success px-4" id="closeSuccessBtn">OK</button>
        </div>
    @endif    
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold mb-0" style="font-size: 24px;">Data Berita</h2>
        <a href="{{ route('admin.berita.create') }}" class="add-button">
            Add New <i class="fas fa-plus"></i>
        </a>
    </div>

     {{-- Form untuk memilih jumlah data per halaman dan search (opsional) --}}
    <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2"> {{-- Tambah gap-2 untuk spasi --}}
        <form action="{{ route('admin.berita.index') }}" method="GET" class="d-inline-flex align-items-center form-perpage-group">
            <label for="perPageShow">Tampilkan:</label>
            <select name="perPage" id="perPageShow" class="form-select form-select-sm" onchange="this.form.submit()">
                {{-- Sesuaikan opsi value dengan yang ada di controller --}}
                @foreach ([5, 10, 25, 50, 100] as $size)
                    <option value="{{ $size }}" {{ request('perPage', 5) == $size ? 'selected' : '' }}>
                        {{ $size }}
                    </option>
                @endforeach
            </select>
            <label for="perPageShow">data</label>
            {{-- Jika ada parameter search, pastikan terkirim juga --}}
            @if(request('search'))
                <input type="hidden" name="search" value="{{ request('search') }}">
            @endif
        </form>
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
                    <div class="flex-shrink-0">
                        <img src="{{ asset('images/berita/' . $item->gambar) }}"
                             alt="{{ $item->judul }}"/>
                        @else
                            <i class="fas fa-image fa-2x" style="color: #0d6efd;"></i>
                        @endif
                    </td>
                    <td class="text-center">{{ \Carbon\Carbon::parse($item->tanggal_publikasi)->translatedFormat('d F Y') }}</td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center gap-3">
                            <a href="{{ route('admin.berita.edit', $item->id) }}" class="text-primary" title="Edit">
                                <i class="fas fa-edit fa-lg"></i>
                            </a>
                           <form class="delete-form d-inline" data-name="{{ $item->id }}" action="{{ route('admin.berita.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="icon-btn text-danger delete-btn" title="Hapus">
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

    {{-- Pagination --}}
    @if ($beritas->hasPages())
    <div class="d-flex justify-content-between align-items-center mt-4">
        <div class="text-muted">
            Menampilkan {{ $beritas->firstItem() }} sampai {{ $beritas->lastItem() }} dari {{ $beritas->total() }} data
        </div>
        {{-- Menggunakan method links() untuk render pagination Bootstrap --}}
        {{ $beritas->links() }}
    </div>
    @endif
</div> {{-- Penutup .container-fluid --}}

{{-- Script SweetAlert & popup --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Pastikan tombol OK pada popup sukses bisa diklik dan menutup popup
        const closeBtn = document.getElementById('closeSuccessBtn');
        const popup = document.getElementById('successPopup');
        if (closeBtn && popup) {
            closeBtn.addEventListener('click', function () {
                // Menghapus element popup dari DOM
                popup.remove();
            });
        }

        // Konfirmasi hapus data menggunakan SweetAlert2
        document.querySelectorAll('.delete-btn').forEach(function (btn) {
            btn.addEventListener('click', function () {
                const form = this.closest('.delete-form');
                const nama = form.dataset.name || 'data ini';

                Swal.fire({
                    title: 'Yakin ingin menghapus?',
                    text: `Data jemaat "${nama}" akan dihapus!`,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#5D6532',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    });
</script>
@endsection
