@extends('layouts.app')

@section('content')
<div class="relative overflow-hidden">
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-r from-navy-900 to-navy-700 h-[500px]">
        <div class="container mx-auto px-4 h-full flex items-center">
            <div class="text-white max-w-2xl">
                <h1 class="text-5xl font-bold mb-6 animate-fade-in">Sejarah Gereja</h1>
                <p class="text-xl mb-8 leading-relaxed">Menelusuri perjalanan iman dan perkembangan Gereja Katolik Santo Paulus dari masa ke masa. Sebuah kisah tentang pertumbuhan komunitas dan pelayanan kepada umat.</p>
                <a href="#timeline" class="bg-red-600 text-white px-8 py-3 rounded-full font-semibold hover:bg-red-700 transition duration-300 shadow-lg">Jelajahi Sejarah</a>
            </div>
        </div>
        <div class="absolute bottom-0 right-0 w-1/2">
            <img src="{{ asset('images/church-vintage.jpg') }}" alt="Gereja" class="opacity-60 mix-blend-overlay">
        </div>
    </div>

    <!-- Timeline Section -->
    <div id="timeline" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="relative wrap overflow-hidden p-10">
                    <div class="absolute h-full border-2 border-red-300" style="left: 50%"></div>
                    
                    <!-- Timeline Item 1 -->
                    <div class="mb-8 flex justify-between items-center w-full right-timeline">
                        <div class="order-1 w-5/12"></div>
                        <div class="z-20 flex items-center order-1 bg-red-600 shadow-xl w-8 h-8 rounded-full">
                            <h1 class="mx-auto font-semibold text-lg text-white">1</h1>
                        </div>
                        <div class="order-1 bg-white rounded-lg shadow-xl w-5/12 px-6 py-4 border-l-4 border-red-600">
                            <h3 class="mb-3 font-bold text-navy-800 text-xl">1950</h3>
                            <p class="text-sm leading-snug tracking-wide text-gray-700">Awal mula berdirinya Gereja dengan komunitas kecil yang terdiri dari beberapa keluarga Katolik.</p>
                        </div>
                    </div>

                    <!-- Timeline Item 2 -->
                    <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                        <div class="order-1 w-5/12"></div>
                        <div class="z-20 flex items-center order-1 bg-navy-800 shadow-xl w-8 h-8 rounded-full">
                            <h1 class="mx-auto font-semibold text-lg text-white">2</h1>
                        </div>
                        <div class="order-1 bg-white rounded-lg shadow-xl w-5/12 px-6 py-4 border-r-4 border-navy-800">
                            <h3 class="mb-3 font-bold text-navy-800 text-xl">1975</h3>
                            <p class="text-sm leading-snug tracking-wide text-gray-700">Pembangunan gedung gereja pertama dan peresmian sebagai paroki yang mandiri.</p>
                        </div>
                    </div>

                    <!-- Timeline Item 3 -->
                    <div class="mb-8 flex justify-between items-center w-full right-timeline">
                        <div class="order-1 w-5/12"></div>
                        <div class="z-20 flex items-center order-1 bg-red-600 shadow-xl w-8 h-8 rounded-full">
                            <h1 class="mx-auto font-semibold text-lg text-white">3</h1>
                        </div>
                        <div class="order-1 bg-white rounded-lg shadow-xl w-5/12 px-6 py-4 border-l-4 border-red-600">
                            <h3 class="mb-3 font-bold text-navy-800 text-xl">2000</h3>
                            <p class="text-sm leading-snug tracking-wide text-gray-700">Renovasi besar-besaran dan perluasan area gereja untuk mengakomodasi pertumbuhan umat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Gallery Section -->
    <div class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-navy-800">Galeri Sejarah</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <img src="{{ asset('images/gallery-1.jpg') }}" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-navy-900">
                        <h3 class="text-white font-semibold">Pembangunan Awal</h3>
                    </div>
                </div>
                <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <img src="{{ asset('images/gallery-2.jpg') }}" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-navy-900">
                        <h3 class="text-white font-semibold">Peresmian Gereja</h3>
                    </div>
                </div>
                <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <img src="{{ asset('images/gallery-3.jpg') }}" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-navy-900">
                        <h3 class="text-white font-semibold">Perayaan 50 Tahun</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial Section -->
    <div class="py-16 bg-navy-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-navy-800">Kesaksian Para Pionir</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <div class="bg-white p-6 rounded-lg shadow-lg border-l-4 border-red-600 hover:transform hover:scale-105 transition duration-300">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('images/testimonial-1.jpg') }}" class="w-12 h-12 rounded-full mr-4 border-2 border-navy-800">
                        <div>
                            <h4 class="font-semibold text-navy-800">Bapak Johannes</h4>
                            <p class="text-red-600 text-sm">Umat Pertama</p>
                        </div>
                    </div>
                    <p class="text-gray-700">"Saya masih ingat bagaimana kami memulai komunitas ini dari nol. Dengan semangat dan doa, kami membangun gereja ini bersama-sama."</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg border-l-4 border-navy-800 hover:transform hover:scale-105 transition duration-300">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('images/testimonial-2.jpg') }}" class="w-12 h-12 rounded-full mr-4 border-2 border-red-600">
                        <div>
                            <h4 class="font-semibold text-navy-800">Ibu Maria</h4>
                            <p class="text-red-600 text-sm">Pengurus Pertama</p>
                        </div>
                    </div>
                    <p class="text-gray-700">"Melihat perkembangan gereja ini dari tahun ke tahun sungguh membuat hati saya bersyukur. Tuhan sungguh baik."</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.animate-fade-in {
    animation: fadeIn 1s ease-in;
}

@keyframes fadeIn {
    0% { opacity: 0; transform: translateY(20px); }
    100% { opacity: 1; transform: translateY(0); }
}

/* Custom color classes */
.bg-navy-50 { background-color: #f0f4f8; }
.bg-navy-700 { background-color: #1a365d; }
.bg-navy-800 { background-color: #1e3a8a; }
.bg-navy-900 { background-color: #0f2957; }
.text-navy-800 { color: #1e3a8a; }
</style>
@endsection