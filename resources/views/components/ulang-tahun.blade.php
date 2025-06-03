<div class="space-y-2">
    <!-- Header -->
    <div class="flex items-center gap-2 px-3 py-2 bg-{{ $hariIni ? 'yellow' : 'blue' }}-50 rounded-lg">
        <i class="fas {{ $hariIni ? '' : 'fa-calendar-alt text-blue-600' }}"></i>
        <h3 class="font-medium text-sm text-gray-800">
            @if($hariIni)
            
            @else
                Ulang Tahun Bulan {{ now()->format('m/Y') }}
            @endif
        </h3>
    </div>

    <!-- List -->
    <div class="bg-white rounded-lg border border-gray-100 divide-y divide-gray-100">
        @if($jemaats->isEmpty())
            <p class="p-3 text-center text-gray-500 text-sm">
                Tidak ada data.
            </p>
        @else
            @foreach($jemaats as $jemaat)
                <div class="p-2 hover:bg-gray-50 transition-colors">
                    <div class="flex items-center justify-between gap-2">
                        <!-- Nama -->
                        <span class="font-medium text-gray-800 truncate text-sm">
                            {{ $jemaat->nama }}
                        </span>
                        
                        <!-- Tanggal (DD/MM/2025) -->
                        <span class="text-xs text-gray-500 whitespace-nowrap">
                            {{ \Carbon\Carbon::parse($jemaat->tanggal_lahir)->format('d/m/2025') }}
                        </span>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>