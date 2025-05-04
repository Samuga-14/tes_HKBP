@extends('layouts.admin')

@section('title', 'Data jemaat')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-gradient-primary text-white d-flex justify-content-between align-items-center py-3">
        <div class="d-flex align-items-center gap-3">
            <i class="fas fa-newspaper"></i>
            <h5 class="mb-0">Daftar jemaat</h5>
        </div>
    </div>
    <div class="card-body p-4">
        <div class="mb-4 d-flex justify-content-between flex-wrap gap-3">
            <a href="{{ route('admin.jemaat.create') }}" class="btn btn-primary">
                <i class="fas fa-plus me-2"></i> Tambah jemaat
            </a>
            
            <!-- Form untuk mengubah jumlah item per halaman -->
            <form action="{{ route('admin.jemaat.index') }}" method="GET" class="d-flex align-items-center">
                <!-- Simpan parameter pencarian saat mengubah pagination -->
                @if(request('search'))
                    <input type="hidden" name="search" value="{{ request('search') }}">
                @endif
            </form>
        </div>
        
        <div class="mb-3">
            <form action="{{ route('admin.jemaat.index') }}" method="GET" class="d-flex flex-wrap align-items-center" role="search">
                <input type="text"
                       name="search"
                       class="form-control"
                       placeholder="Cari nama jemaat..."
                       value="{{ request('search') }}"
                       style="max-width: 990px; border-radius: 80px; margin-right: 25px;" />

                <button type="submit"
                        class="btn btn-primary d-flex align-items-center gap-1"
                        style="border-radius: 80px;">
                    <i class="fas fa-search"></i>
                    <span>Cari</span>
                </button>

                @if(request('search'))
                    <a href="{{ route('admin.jemaat.index') }}"
                       class="btn btn-secondary d-flex align-items-center gap-1 ms-2"
                       style="border-radius: 80px;">
                        <i class="fas fa-times"></i>
                        <span>Reset</span>
                    </a>
                @endif
                
                <!-- Simpan parameter perPage saat melakukan pencarian -->
                @if(request('perPage'))
                    <input type="hidden" name="perPage" value="{{ request('perPage') }}">
                @endif
            </form>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr class="bg-primary text-white">
                        <th class="text-center">Nama</th>
                        <th class="text-center">Jenis Kelamin</th>
                        <th class="text-center">Tanggal Lahir</th>
                        <th class="text-center">Alamat</th>
                        <th class="text-center">Status Pernikahan</th>
                        <th class="text-center">Nama Pasangan</th>
                        <th class="text-center">Jumlah Anak</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($jemaats as $item)
                        <tr class="align-middle">
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->jenis_kelamin }}</td>
                            <td>{{ $item->tanggal_lahir }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->status_pernikahan }}</td>
                            <td>{{ $item->nama_pasangan }}</td>
                            <td>{{ $item->jumlah_anak }}</td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.jemaat.edit', $item->id) }}" class="btn btn-warning btn-sm" data-bs-toggle="tooltip" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.jemaat.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin mau hapus jemaat ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" data-bs-toggle="tooltip" title="Hapus">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center py-4">
                                <div class="text-muted">
                                    <i class="fas fa-inbox fa-3x mb-3"></i>
                                    <p>Tidak ada data jemaat</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <!-- Pagination with improved styling -->
        <div class="d-flex justify-content-between align-items-center mt-4">
            <div class="text-muted small">
                Menampilkan <span class="fw-semibold">{{ $jemaats->firstItem() ?? 0 }}</span> - 
                <span class="fw-semibold">{{ $jemaats->lastItem() ?? 0 }}</span> dari 
                <span class="fw-semibold">{{ $jemaats->total() }}</span> jemaat
            </div>
            
            <div class="d-flex">
                {{ $jemaats->appends(request()->query())->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>
@endsection