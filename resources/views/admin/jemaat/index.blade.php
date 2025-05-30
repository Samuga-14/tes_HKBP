@extends('layouts.admin')

@section('title', 'Data Jemaat')

@section('content')
<style>
    /* Pastikan body memiliki posisi relative */
    body {
        position: relative;
        z-index: 1;
    }

    /* Styling untuk tabel */
    .table-no-border th, .table-no-border td {
        border: none !important;
    }
    .table-alternating tbody tr:nth-child(odd) {
        background-color: #ffffff;
    }
    .table-alternating tbody tr:nth-child(even) {
        background-color: #e6f0fa;
    }
    .table-alternating tbody tr:hover {
        background-color: #d0e7ff;
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

    /* Styling untuk kontainer utama */
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
 .info-card {
        background-color: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: .75rem;
        padding: 1.25rem;
        text-align: center;
        margin-bottom: 1rem; /* Tambahkan margin bawah untuk card */
    }
    .info-card .icon {
        font-size: 2.5rem;
        margin-bottom: .5rem;
    }
    .info-card .title {
        font-size: 0.9rem;
        color: #6c757d;
        font-weight: 500;
        margin-bottom: .25rem;
    }
    .info-card .count {
        font-size: 1.75rem;
        font-weight: bold;
        color: #343a40;
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

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold mb-0" style="font-size: 24px;">Data Jemaat</h2>
        <a href="{{ route('admin.jemaat.create') }}" class="add-button">
            Add New <i class="fas fa-plus"></i>
        </a>
    </div>

    {{-- Form pencarian dan jumlah tampilan --}}
    <form action="{{ route('admin.jemaat.index') }}" method="GET" class="d-flex align-items-center mb-3 gap-3 flex-wrap">
        <div class="d-flex align-items-center">
            <label for="perPage" class="me-2">Show</label>
            <select name="perPage" id="perPage" class="form-select form-select-sm" onchange="this.form.submit()">
                @foreach ([5, 10, 20, 50, 100] as $size)
                    <option value="{{ $size }}" {{ request('perPage', 5) == $size ? 'selected' : '' }}>
                        {{ $size }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="input-group" style="max-width: 300px;">
            <input type="text" name="search" class="form-control" placeholder="Cari berdasarkan nama" value="{{ request('search') }}">
            <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
        </div>
    </form>

    {{-- Tabel data jemaat --}}
    <div class="table-responsive">
        <table class="table table-no-border table-alternating align-middle">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Status Pernikahan</th>
                    {{-- Kolom Nama Pasangan dan Jumlah Anak dihapus --}}
                    {{-- <th>Nama Pasangan</th> --}}
                    {{-- <th>Jumlah Anak</th> --}}
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($jemaats as $jemaat)
                    <tr>
                        <td>{{ $loop->iteration + ($jemaats->currentPage() - 1) * $jemaats->perPage() }}</td>
                        <td>{{ $jemaat->nama }}</td>
                        <td>{{ $jemaat->tanggal_lahir ? $jemaat->tanggal_lahir->format('d M Y') : '-' }}</td> {{-- Format tanggal --}}
                        <td>{{ $jemaat->jenis_kelamin }}</td>
                        <td>{{ Str::limit($jemaat->alamat, 50) }}</td> {{-- Batasi panjang alamat di tabel --}}
                        <td>{{ $jemaat->status_pernikahan }}</td>
                        {{-- Data Nama Pasangan dan Jumlah Anak dihapus --}}
                        {{-- <td>{{ $jemaat->nama_pasangan ?? '-' }}</td> --}}
                        {{-- <td>{{ $jemaat->jumlah_anak }}</td> --}}
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-3">
                                <a href="{{ route('admin.jemaat.edit', $jemaat->id) }}" class="text-primary" title="Edit">
                                    <i class="fas fa-edit fa-lg"></i>
                                </a>
                                <form class="delete-form d-inline" data-name="{{ $jemaat->nama }}" action="{{ route('admin.jemaat.destroy', $jemaat->id) }}" method="POST">
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
                        <td colspan="7" class="text-center text-muted py-4"> {{-- Colspan disesuaikan jadi 7 --}}
                            <i class="fas fa-inbox fa-3x mb-2"></i><br>
                            Tidak ada data jemaat.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    @if ($jemaats->hasPages())
    <div class="d-flex justify-content-between align-items-center mt-4">
        <div class="text-muted">
            Menampilkan {{ $jemaats->firstItem() }} sampai {{ $jemaats->lastItem() }} dari {{ $jemaats->total() }} data
        </div>
        {{-- Tampilkan pagination links dengan mempertahankan query string (search, perPage) --}}
        {{ $jemaats->links() }}
    </div>
    @endif
</div>

{{-- Script SweetAlert & popup --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // ... (Script JS yang sudah ada tetap di sini) ...
   document.addEventListener('DOMContentLoaded', function () {
    const closeBtn = document.getElementById('closeSuccessBtn');
    const popup = document.getElementById('successPopup');

    if (popup) { // Cukup cek keberadaan popup
        console.log('DEBUG: #successPopup DITEMUKAN di DOM.');
        if (closeBtn) {
            console.log('DEBUG: #closeSuccessBtn DITEMUKAN. Memasang event listener.');
           closeBtn.addEventListener('click', function () {
    console.log('DEBUG: #closeSuccessBtn DIKLIK!');
    popup.remove(); // LANGSUNG HAPUS ELEMENNYA
});
        } else {
            console.error('DEBUG: #closeSuccessBtn TIDAK DITEMUKAN di dalam #successPopup.');
        }
    } else {
        // Ini akan sering muncul jika halaman dimuat tanpa session('success'), jadi ini normal.
        // console.log('DEBUG: #successPopup tidak ditemukan (kemungkinan tidak ada session success).');
    }

    // Konfirmasi hapus data menggunakan SweetAlert2
    if (typeof Swal !== 'undefined') {
        const deleteButtons = document.querySelectorAll('.delete-btn');
        if (deleteButtons.length > 0) {
            // console.log('DEBUG: Ditemukan ' + deleteButtons.length + ' tombol delete.');
        }
        deleteButtons.forEach(function (btn) {
            btn.addEventListener('click', function () {
                const form = this.closest('.delete-form');
                const nama = form.dataset.name || 'data ini';
                Swal.fire({
                    title: 'Yakin ingin menghapus?',
                    text: `Data jemaat "${nama}" akan dihapus secara permanen!`,
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
    } else {
        console.warn('DEBUG: SweetAlert2 (Swal) tidak terdefinisi.');
    }
});
</script>
@endsection