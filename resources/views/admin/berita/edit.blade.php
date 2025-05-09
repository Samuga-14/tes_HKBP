@extends('layouts.admin')

@section('content')
<!-- Font Kumbh Sans -->
<link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;600&display=swap" rel="stylesheet">

<style>
    * {
        font-family: 'Kumbh Sans', sans-serif;
    }

    .form-wrapper {
        background-color: #fff;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        margin: 40px 0;
    }

    .form-title {
        font-size: 24px;
        font-weight: 600;
        color: #222;
        margin-bottom: 32px;
    }

    .form-label {
        font-size: 14px;
        font-weight: 600;
        color: #333;
        margin-bottom: 6px;
    }

    .form-control,
    textarea {
        border-radius: 10px;
        font-size: 14px;
        padding: 10px 14px;
        border: 1px solid #ccc;
    }

    textarea.form-control {
        resize: vertical;
    }

    .form-group {
        margin-bottom: 24px;
    }

    .file-input-wrapper {
        display: flex;
        align-items: center;
        height: 44px;
        border: 1px solid #ccc;
        border-radius: 10px;
        overflow: hidden;
    }

    .file-input-wrapper label {
        background-color: #f8f9fa;
        padding: 0 20px;
        margin: 0;
        height: 100%;
        display: flex;
        align-items: center;
        border-right: 1px solid #ccc;
        font-size: 14px;
        cursor: pointer;
    }

    .file-input-wrapper #file-name {
        padding-left: 16px;
        color: #666;
        font-size: 14px;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }

    .btn-submit {
        background-color: #0d6efd;
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 10px 28px;
        font-size: 14px;
        font-weight: 600;
    }

    .btn-submit:hover {
        background-color: #0b5ed7;
    }

    .form-footer {
        display: flex;
        justify-content: flex-end;
        margin-top: 32px;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="form-wrapper">
                <div class="form-title">Edit Berita</div>

                <form id="form-edit" action="{{ route('admin.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Judul -->
                    <div class="form-group">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" name="judul" id="judul" class="form-control"
                            value="{{ old('judul', $berita->judul) }}" required>
                    </div>

                    <!-- Gambar -->
                    <div class="form-group">
                        <label for="gambar" class="form-label">Gambar</label>
                        <div class="file-input-wrapper">
                            <label for="gambar">Choose File</label>
                            <div id="file-name">No File Chosen</div>
                        </div>
                        <input type="file" name="gambar" id="gambar" accept="image/*" class="d-none">
                    </div>

                    <!-- Deskripsi -->
                    <div class="form-group">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control" rows="5" required>{{ old('deskripsi', $berita->deskripsi) }}</textarea>
                    </div>

                    <!-- Tanggal Unggah -->
                    <div class="form-group">
                        <label for="tanggal_publikasi" class="form-label">Tanggal Unggah</label>
                        <input type="date" name="tanggal_publikasi" id="tanggal_publikasi" class="form-control"
                            value="{{ old('tanggal_publikasi', $berita->tanggal_publikasi ? date('Y-m-d', strtotime($berita->tanggal_publikasi)) : '') }}" required>
                    </div>

                    <!-- Tombol -->
                    <div class="form-footer">
                        <button type="button" id="btn-edit" class="btn-submit">Edit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<script>
    // File name tampil
    document.getElementById('gambar').addEventListener('change', function () {
        const fileName = this.files[0]?.name || 'No File Chosen';
        document.getElementById('file-name').textContent = fileName;
    });

    // SweetAlert konfirmasi
    document.getElementById('btn-edit').addEventListener('click', function (e) {
        e.preventDefault();

        Swal.fire({
            title: 'Apakah Anda yakin ingin mengedit data berita?',
            text: "Perubahan yang Anda buat tidak bisa dibatalkan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya, Edit!',
            cancelButtonText: 'Batal',
            reverseButtons: true,
            customClass: {
                confirmButton: 'btn btn-danger me-2',
                cancelButton: 'btn btn-primary'
            },
            buttonsStyling: false
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('form-edit').submit();
            }
        });
    });

    @if (session('success'))
        Swal.fire({
            title: 'Berhasil!',
            text: "{{ session('success') }}",
            icon: 'success',
            confirmButtonText: 'OK',
            customClass: {
                confirmButton: 'btn btn-primary'
            },
            buttonsStyling: false
        });
    @endif
</script>
@endsection
