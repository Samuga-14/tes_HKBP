@extends('admin.layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Berita</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group">
                            <label for="judul">Judul Berita</label>
                            <input type="text" class="form-control" id="judul" name="judul" value="{{ $berita->judul }}" required>
                        </div>

                        <div class="form-group">
                            <label for="isi">Isi Berita</label>
                            <textarea class="form-control" id="isi" name="isi" rows="6" required>{{ $berita->isi }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                <label class="custom-file-label" for="gambar">Pilih file</label>
                            </div>
                            @if($berita->gambar)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/'.$berita->gambar) }}" alt="Preview" style="max-width: 200px">
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select class="form-control" id="kategori" name="kategori" required>
                                <option value="">Pilih Kategori</option>
                                <option value="berita" {{ $berita->kategori == 'berita' ? 'selected' : '' }}>Berita</option>
                                <option value="pengumuman" {{ $berita->kategori == 'pengumuman' ? 'selected' : '' }}>Pengumuman</option>
                                <option value="artikel" {{ $berita->kategori == 'artikel' ? 'selected' : '' }}>Artikel</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="1" {{ $berita->status == 1 ? 'selected' : '' }}>Aktif</option>
                                <option value="0" {{ $berita->status == 0 ? 'selected' : '' }}>Draft</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update Berita</button>
                            <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // File input
    $(document).on('change', '.custom-file-input', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });

    // Initialize CKEditor for rich text editing
    CKEDITOR.replace('isi');
</script>
@endpush
