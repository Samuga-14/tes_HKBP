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
                        <!-- Icon -->
                        <div class="text-yellow-400">
                            <i class="fas fa-gift"></i>
                        </div>
                            <!-- Nama -->
                            <div>
                                <span class="font-medium text-gray-800 block">
                                    {{ $jemaat->nama }}
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>