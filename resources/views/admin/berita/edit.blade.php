@extends('layouts.admin')

@section('content')
<style>
    .form-wrapper {
        background-color: #fff;
        border-radius: 12px;
        padding: 40px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        margin-top: 40px;
        margin-bottom: 40px;
        max-width: 100%;
    }

    .form-title {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 32px;
    }

    .form-label {
        font-size: 13px;
        font-weight: 600;
        color: #666;
        margin-bottom: 8px;
    }

    .form-control,
    textarea {
        border-radius: 8px;
        font-size: 14px;
        padding: 10px 14px;
        border: 1px solid #ccc;
    }

    textarea.form-control {
        resize: none;
    }

    .form-group {
        margin-bottom: 24px;
    }

    .btn-submit {
        background-color: #1976d2;
        color: #fff;
        border: none;
        border-radius: 6px;
        padding: 10px 36px;
        font-size: 14px;
    }

    .btn-submit:hover {
        background-color: #155fa0;
    }

    .form-footer {
        display: flex;
        justify-content: flex-end;
        margin-top: 40px;
    }

    @media (min-width: 768px) {
        .form-wrapper {
            padding: 48px 60px;
        }
    }
</style>

<!-- SweetAlert2 CDN -->
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
                    <div class="mb-3">
                        <label for="gambar" class="form-label text-secondary" style="font-weight: 600; font-size: 14px;">Gambar</label>
                        <div class="d-flex" style="border: 1px solid #ccc; border-radius: 12px; overflow: hidden; height: 44px;">
                            <label for="gambar" class="btn btn-light mb-0" style="border: none; border-right: 1px solid #ccc; border-radius: 0; padding: 0 20px; display: flex; align-items: center;">
                                Choose File
                            </label>
                            <div id="file-name" class="d-flex align-items-center px-3 text-muted" style="font-size: 14px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                No File Choosen
                            </div>
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

<!-- SweetAlert Logic -->
<script>
    // File name tampil
    document.getElementById('gambar').addEventListener('change', function () {
        const fileName = this.files[0]?.name || 'No File Choosen';
        document.getElementById('file-name').textContent = fileName;
    });

    // SweetAlert konfirmasi dengan AJAX
    document.getElementById('btn-edit').addEventListener('click', function (e) {
        e.preventDefault();

        Swal.fire({
            title: 'Apakah Anda yakin ingin mengedit data berita?',
            text: "Perubahan yang Anda buat tidak bisa dibatalkan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya, Edit!',
            cancelButtonText: 'Tidak, Batalkan',
            reverseButtons: true,
            customClass: {
                confirmButton: 'btn btn-danger me-2',
                cancelButton: 'btn btn-primary'
            },
            buttonsStyling: false
        }).then((result) => {
            if (result.isConfirmed) {
                // Kirim data menggunakan AJAX
                const form = document.getElementById('form-edit');
                const formData = new FormData(form);

                fetch(form.action, {
                    method: form.method,
                    body: formData,
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            title: 'Berhasil!',
                            text: data.message,
                            icon: 'success',
                            confirmButtonText: 'OK',
                            customClass: {
                                confirmButton: 'btn btn-primary'
                            },
                            buttonsStyling: false
                        }).then(() => {
                            window.location.href = data.redirect_url; // Redirect jika perlu
                        });
                    } else {
                        Swal.fire({
                            title: 'Gagal!',
                            text: data.message,
                            icon: 'error',
                            confirmButtonText: 'OK',
                            customClass: {
                                confirmButton: 'btn btn-primary'
                            },
                            buttonsStyling: false
                        });
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    Swal.fire({
                        title: 'Terjadi Kesalahan!',
                        text: 'Silakan coba lagi.',
                        icon: 'error',
                        confirmButtonText: 'OK',
                        customClass: {
                            confirmButton: 'btn btn-primary'
                        },
                        buttonsStyling: false
                    });
                });
            }
        });
    });

    // Jika berhasil (dari flash session)
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
