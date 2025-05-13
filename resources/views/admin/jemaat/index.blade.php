@extends('layouts.admin')

@section('title', 'Data Jemaat')

@section('content')
<style>
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
</style>

<div class="container-fluid py-3 px-4 rounded-container shadow-sm">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold mb-0" style="font-size: 24px;">Data Jemaat</h2>
        <a href="{{ route('admin.jemaat.create') }}" class="add-button">
           Add New<i class="fas fa-plus"></i>
        </a>
    </div>

    <!-- Pencarian -->
   <form action="{{ route('admin.jemaat.index') }}" method="GET" class="d-flex align-items-center mb-3 gap-3 flex-wrap">
    <div class="d-flex align-items-center">
        <label for="perPage" class="me-2">Show</label>
        <select name="perPage" id="perPage" class="form-select form-select-sm" onchange="this.form.submit()">
            @foreach ([10, 20, 50, 100] as $size)
                <option value="{{ $size }}" {{ request('perPage', 10) == $size ? 'selected' : '' }}>
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


    <div class="table-responsive">
        <table class="table table-no-border table-alternating align-middle">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Status Pernikahan</th>
                    <th>Jumlah Anak</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($jemaats as $jemaat)
                <tr>
                    <td>{{ $loop->iteration + ($jemaats->currentPage() - 1) * $jemaats->perPage() }}</td>
                    <td>{{ $jemaat->nama }}</td>
                    <td>{{ $jemaat->jenis_kelamin }}</td>
                    <td>{{ $jemaat->alamat }}</td>
                    <td>{{ $jemaat->status_pernikahan }}</td>
                    <td>{{ $jemaat->jumlah_anak }}</td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center gap-3">
                            <a href="{{ route('admin.jemaat.edit', $jemaat->id) }}" class="text-primary" title="Edit">
                                <i class="fas fa-edit fa-lg"></i>
                            </a>
                            <form action="{{ route('admin.jemaat.destroy', $jemaat->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="icon-btn text-danger" title="Hapus">
                                    <i class="fas fa-trash-alt fa-lg"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center text-muted py-4">
                        <i class="fas fa-inbox fa-3x mb-2"></i><br>
                        Tidak ada data jemaat.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-3">
        {{ $jemaats->links() }}
    </div>
</div>
@endsection
