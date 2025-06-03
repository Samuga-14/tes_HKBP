<div class="space-y-2">
    <!-- Header -->
    <div class="flex items-center gap-2 px-3 py-2 bg-{{ $hariIni ? 'yellow' : 'blue' }}-50 rounded-lg">


    <!-- List -->
    <div class="bg-white rounded-lg border border-gray-100 shadow-sm hover:shadow-md transition-all">
        @if($jemaats->isEmpty())
            <div class="p-6 text-center">
                <p class="text-gray-500 text-sm">
                    <i class="fas fa-birthday-cake opacity-50 text-xl mb-2"></i>
                    <br>
                    Tidak ada data ulang tahun
                </p>
            </div>
        @else
            @foreach($jemaats as $jemaat)
                <div class="p-3 hover:bg-gray-50 transition-colors border-b border-gray-100 last:border-b-0">
                    <div class="flex items-center justify-between gap-3">
                        <div class="flex items-center gap-3">
                            <!-- Avatar -->
                            <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center">
                                <span class="text-blue-600 font-medium">
                                    {{ substr($jemaat->nama, 0, 1) }}
                                </span>
                            </div>
                            <!-- Nama -->
                            <div>
                                <span class="font-medium text-gray-800 block">
                                    {{ $jemaat->nama }}
                                </span>
                                <span class="text-xs text-gray-500">
                                    {{ \Carbon\Carbon::parse($jemaat->tanggal_lahir)->format('d/m/2025') }}
                                </span>
                            </div>
                        </div>
                        <!-- Icon -->
                        <div class="text-yellow-400">
                            <i class="fas fa-gift"></i>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>