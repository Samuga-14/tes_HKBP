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
        z-index: 99999;
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
    @if (session('success'))
        <div id="successPopup" class="custom-success-popup d-flex flex-column align-items-center justify-content-center">
            <div class="check-icon mb-3">
                <i class="fas fa-check-circle fa-5x text-success"></i>
            </div>
            <h5 class="text-center fw-bold mb-3">{{ session('success') }}</h5>
            <button class="btn btn-danger px-4" id="closeSuccessBtn">OK</button>
        </div>
    @endif

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
                    <th>Link Foto</th>
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
                        <td style="max-width: 180px; word-break: break-word;">
                            @if ($item->link_foto)
                                <a href="{{ $item->link_foto }}" target="_blank" rel="noopener noreferrer">
                                    {{ $item->link_foto }}
                                </a>
                            @else
                                <span class="text-muted">-</span>
                            @endif
                        </td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('admin.galeri.edit', $item->id) }}" class="icon-action text-primary" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form class="delete-form d-inline" data-name="{{ $item->judul }}" action="{{ route('admin.galeri.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="icon-action text-danger delete-btn" title="Hapus">
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

    <div class="d-flex justify-content-end">
        {{ $galeri->links() }}
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const closeBtn = document.getElementById('closeSuccessBtn');
        const popup = document.getElementById('successPopup');
        if (closeBtn && popup) {
            closeBtn.addEventListener('click', function () {
                popup.remove();
            });
        }

        document.querySelectorAll('.delete-btn').forEach(function (btn) {
            btn.addEventListener('click', function () {
                const form = this.closest('.delete-form');
                const nama = form.dataset.name || 'data ini';

                Swal.fire({
                    title: 'Yakin ingin menghapus?',
                    text: `Data galeri "${nama}" akan dihapus!`,
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
