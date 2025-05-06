@extends('layouts.admin')

@section('title', 'Data Berita')

@section('content')
<div class="px-4 py-3">
    <div class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-3">
        <h3 class="fw-bold">Data Berita</h3>
        <a href="{{ route('admin.berita.create') }}" class="btn" style="background-color: #14A4D9; color: white; border-radius: 10px; padding: 10px 20px; transition: background-color 0.3s ease;">
            Add New <i class="fas fa-plus" style="margin-left: 8px; font-size: 18px;"></i>
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-hover" style="border-collapse: separate; border-spacing: 0 8px;">
            <thead class="table-light">
                <tr>
                    <th style="width: 40px;" class="text-center">No.</th>
                    <th style="width: 180px;">Judul</th>
                    <th>Deskripsi</th>
                    <th class="text-center">Gambar</th>
                    <th class="text-center">Tanggal Publikasi</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($beritas as $index => $item)
                    <tr class="align-middle" style="background-color: {{ $index % 2 === 0 ? '#F1F6FB' : '#ffffff' }}; border-radius: 10px;">
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td>{{ $item->judul }}</td>
                        <td style="max-width: 300px; word-wrap: break-word; white-space: normal;">
                            {{ Str::limit(strip_tags($item->deskripsi), 80) }}
                        </td>
                        <td class="text-center">
                            @if ($item->gambar)
                                <img src="{{ asset('images/berita/' . $item->gambar) }}" alt="gambar" style="width: 40px; height: 40px; object-fit: cover; border-radius: 5px;">
                            @else
                                <i class="fas fa-image fa-2x text-dark"></i>
                            @endif
                        </td>
                        <td class="text-center">{{ \Carbon\Carbon::parse($item->tanggal_publikasi)->format('d M Y') }}</td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-4">
                                <a href="{{ route('admin.berita.edit', $item->id) }}" class="text-primary" title="Edit" style="transition: transform 0.3s ease; margin-right: 16px;"> <!-- Jarakkan Edit dengan Hapus -->
                                    <i class="fas fa-edit fa-lg" style="font-size: 20px;"></i>
                                </a>
                                <form action="{{ route('admin.berita.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin mau hapus berita ini?')" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm p-0 text-danger border-0 bg-transparent" title="Hapus" style="transition: transform 0.3s ease;">
                                        <i class="fas fa-trash-alt fa-lg" style="font-size: 20px;"></i>
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
@endsection
