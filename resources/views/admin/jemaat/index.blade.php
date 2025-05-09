@extends('layouts.admin')

@section('title', 'Data Jemaat')

@section('content')
<div class="container py-4">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <!-- Filter & Search -->
        <div class="d-flex align-items-center gap-3">
            <div class="d-flex align-items-center gap-2">
                <label class="fw-semibold mb-0">Show</label>
                <select class="form-select rounded-3 px-3 py-2 shadow-sm border-0" style="width: 100px; background-color: #f2f2f2;">
                    <option selected>20</option>
                    <option>50</option>
                    <option>100</option>
                </select>
            </div>

            <form action="{{ route('admin.jemaat.index') }}" method="GET" style="max-width: 350px;">
                <input type="text" name="search" class="form-control rounded-3 px-3 py-2 shadow-sm border-0" style="background-color: #f2f2f2;" placeholder="Cari berdasarkan nama" value="{{ request('search') }}">
            </form>
        </div>

        <!-- Add New Button -->
        <a href="{{ route('admin.jemaat.create') }}" class="btn btn-primary rounded-2 px-3 d-flex align-items-center gap-2">
            <i class="fas fa-plus"></i> Add New
        </a>
    </div>

    <!-- Tabel -->
    <div class="table-responsive">
        <table class="table align-middle table-borderless small">
            <thead class="border-bottom border-dark text-secondary">
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Jumlah Anak</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Nama Pasangan</th>
                    <th>Status Pernikahan</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($jemaats as $index => $item)
                    <tr style="{{ $index % 2 == 1 ? 'background-color: #f2f2f2;' : '' }}">
                        <td>{{ $jemaats->firstItem() + $index }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->jenis_kelamin }}</td>
                        <td>{{ $item->jumlah_anak }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td class="fw-semibold">{{ \Carbon\Carbon::parse($item->tanggal_lahir)->translatedFormat('d F Y') }}</td>
                        <td>{{ $item->nama_pasangan }}</td>
                        <td>{{ $item->status_pernikahan }}</td>
                        <td class="text-center">
                            <a href="{{ route('admin.jemaat.edit', $item->id) }}" class="btn btn-link text-primary p-0" title="Edit">
                                <i class="fas fa-pen fa-lg"></i>
                            </a>
                            <form action="{{ route('admin.jemaat.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link text-danger p-0 ms-2" title="Hapus">
                                    <i class="fas fa-trash fa-lg"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center text-muted py-4">
                            <i class="fas fa-inbox fa-2x mb-2"></i>
                            <p class="m-0">Tidak ada data jemaat</p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-between align-items-center mt-4 small">
        <div>
            Menampilkan <strong>{{ $jemaats->firstItem() ?? 0 }}</strong> - <strong>{{ $jemaats->lastItem() ?? 0 }}</strong> dari <strong>{{ $jemaats->total() }}</strong> jemaat
        </div>
        <div>
            {{ $jemaats->appends(request()->query())->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
@endsection
 