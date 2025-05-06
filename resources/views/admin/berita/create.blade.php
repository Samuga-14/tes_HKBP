@extends('layouts.admin')

@section('content')
<div class="container-fluid py-4 px-5" style="background-color: #f9f9f9;">
    <div class="bg-white p-4" style="border: 1px solid #e0e0e0;">
        <h6 class="fw-semibold mb-4">Tambah Berita</h6>
        <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="judul" class="form-label text-secondary" style="font-weight: 600; font-size: 14px;">Judul</label>
                <input type="text" class="form-control" name="judul" id="judul" required>
            </div>
            
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



            <div class="mb-3">
                <label for="deskripsi" class="form-label text-secondary" style="font-weight: 600; font-size: 14px;">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="5"></textarea>
            </div>

            <div class="mb-3">
                <label for="tanggal_publikasi" class="form-label text-secondary" style="font-weight: 600; font-size: 14px;">Tanggal Unggah</label>
                <div class="input-group">
                    <input type="date" class="form-control" name="tanggal_publikasi" id="tanggal_publikasi" required>
                    <span class="input-group-text bg-white"><i class="fas fa-calendar-alt"></i></span>
                </div>
            </div>

            <div class="d-flex justify-content-end mt-4">
                <button type="submit" class="btn btn-primary" style="padding: 6px 20px; font-size: 14px;">Tambahkan</button>
            </div>
        </form>
    </div>
</div>

@endsection
