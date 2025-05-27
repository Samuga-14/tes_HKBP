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
</style>

<div class="table-container">
    <div class="d-flex justify-content-between align-items-center mb-3">
         @if (session('success'))
        <div id="successPopup" class="custom-success-popup d-flex flex-column align-items-center justify-content-center">
            <div class="check-icon mb-3">
                <i class="fas fa-check-circle fa-5x text-success"></i>
            </div>
            <h5 class="text-center fw-bold mb-3">{{ session('success') }}</h5>
            <button class="btn btn-success px-4" id="closeSuccessBtn">OK</button>
        </div>
    @endif
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
                                <form class="delete-form d-inline" data-name="{{ $item->id }}" action="{{ route('admin.struktur.destroy', $item->id) }}" method="POST">
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
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
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
