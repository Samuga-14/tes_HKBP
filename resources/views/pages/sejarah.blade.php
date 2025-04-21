@extends('layouts.app')

@section('content')
<div class="relative overflow-hidden">
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-br from-navy-900 via-navy-800 to-navy-700 h-[600px]">
        <div class="absolute inset-0 bg-pattern opacity-10"></div>
        <div class="container mx-auto px-4 h-full flex items-center">
            <div class="text-white max-w-2xl relative z-10">
                <h1 class="text-6xl font-bold mb-6 animate-fade-in leading-tight">Sejarah Gereja <span class="text-red-500">Santo Paulus</span></h1>
                <p class="text-xl mb-8 leading-relaxed opacity-90">Menelusuri perjalanan iman dan perkembangan Gereja Katolik Santo Paulus dari masa ke masa. Sebuah kisah tentang pertumbuhan komunitas dan pelayanan kepada umat.</p>
                <a href="#timeline" class="inline-flex items-center bg-gradient-to-r from-red-600 to-red-700 text-white px-8 py-4 rounded-full font-semibold hover:from-red-700 hover:to-red-800 transition duration-300 shadow-xl transform hover:-translate-y-1">
                    <span>Jelajahi Sejarah</span>
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </a>
            </div>
        </div>
        <div class="absolute bottom-0 right-0 w-1/2 h-full">
            <div class="absolute inset-0 bg-gradient-to-l from-navy-900/80 to-transparent"></div>
            <img src="{{ asset('images/church-vintage.jpg') }}" alt="Gereja" class="h-full w-full object-cover opacity-70">
        </div>
    </div>

    <!-- Timeline Section -->
    <div id="timeline" class="py-24 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl font-bold text-center mb-16 text-navy-800">Perjalanan <span class="text-red-600">Waktu</span></h2>
                <div class="relative wrap overflow-hidden p-10">
                    <div class="absolute h-full border-2 border-red-300" style="left: 50%"></div>
                    
                    <!-- Timeline Items -->
                    <div class="mb-12 flex justify-between items-center w-full right-timeline">
                        <div class="order-1 w-5/12"></div>
                        <div class="z-20 flex items-center order-1 bg-gradient-to-r from-red-500 to-red-600 shadow-xl w-10 h-10 rounded-full">
                            <h1 class="mx-auto font-semibold text-lg text-white">1</h1>
                        </div>
                        <div class="order-1 bg-white rounded-xl shadow-2xl w-5/12 px-6 py-4 border-l-4 border-red-600 transform transition-all duration-300 hover:scale-105">
                            <h3 class="mb-3 font-bold text-navy-800 text-2xl">1950</h3>
                            <p class="text-sm leading-relaxed tracking-wide text-gray-700">Awal mula berdirinya Gereja dengan komunitas kecil yang terdiri dari beberapa keluarga Katolik.</p>
                        </div>
                    </div>

                    <div class="mb-12 flex justify-between flex-row-reverse items-center w-full left-timeline">
                        <div class="order-1 w-5/12"></div>
                        <div class="z-20 flex items-center order-1 bg-gradient-to-r from-navy-700 to-navy-800 shadow-xl w-10 h-10 rounded-full">
                            <h1 class="mx-auto font-semibold text-lg text-white">2</h1>
                        </div>
                        <div class="order-1 bg-white rounded-xl shadow-2xl w-5/12 px-6 py-4 border-r-4 border-navy-800 transform transition-all duration-300 hover:scale-105">
                            <h3 class="mb-3 font-bold text-navy-800 text-2xl">1975</h3>
                            <p class="text-sm leading-relaxed tracking-wide text-gray-700">Pembangunan gedung gereja pertama dan peresmian sebagai paroki yang mandiri.</p>
                        </div>
                    </div>

                    <div class="mb-12 flex justify-between items-center w-full right-timeline">
                        <div class="order-1 w-5/12"></div>
                        <div class="z-20 flex items-center order-1 bg-gradient-to-r from-red-500 to-red-600 shadow-xl w-10 h-10 rounded-full">
                            <h1 class="mx-auto font-semibold text-lg text-white">3</h1>
                        </div>
                        <div class="order-1 bg-white rounded-xl shadow-2xl w-5/12 px-6 py-4 border-l-4 border-red-600 transform transition-all duration-300 hover:scale-105">
                            <h3 class="mb-3 font-bold text-navy-800 text-2xl">2000</h3>
                            <p class="text-sm leading-relaxed tracking-wide text-gray-700">Renovasi besar-besaran dan perluasan area gereja untuk mengakomodasi pertumbuhan umat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Gallery Section -->
    <div class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-16 text-navy-800">Galeri <span class="text-red-600">Sejarah</span></h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="group relative overflow-hidden rounded-xl shadow-2xl">
                    <img src="{{ asset('images/gallery-1.jpg') }}" class="w-full h-80 object-cover transform group-hover:scale-110 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-white text-xl font-bold">Pembangunan Awal</h3>
                            <p class="text-gray-200 mt-2 text-sm">Tahap awal pembangunan gereja yang penuh makna</p>
                        </div>
                    </div>
                </div>
                <div class="group relative overflow-hidden rounded-xl shadow-2xl">
                    <img src="{{ asset('images/gallery-2.jpg') }}" class="w-full h-80 object-cover transform group-hover:scale-110 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-white text-xl font-bold">Peresmian Gereja</h3>
                            <p class="text-gray-200 mt-2 text-sm">Momen bersejarah peresmian gereja</p>
                        </div>
                    </div>
                </div>
                <div class="group relative overflow-hidden rounded-xl shadow-2xl">
                    <img src="{{ asset('images/gallery-3.jpg') }}" class="w-full h-80 object-cover transform group-hover:scale-110 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-white text-xl font-bold">Perayaan 50 Tahun</h3>
                            <p class="text-gray-200 mt-2 text-sm">Setengah abad pelayanan kepada umat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial Section -->
    <div class="py-20 bg-gradient-to-b from-navy-50 to-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-16 text-navy-800">Kesaksian <span class="text-red-600">Para Pionir</span></h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <div class="bg-white p-8 rounded-2xl shadow-2xl border-l-4 border-red-600 hover:transform hover:scale-105 transition-all duration-300">
                    <div class="flex items-center mb-6">
                        <div class="relative">
                            <img src="{{ asset('images/testimonial-1.jpg') }}" class="w-16 h-16 rounded-full border-2 border-navy-800">
                            <div class="absolute -bottom-2 -right-2 bg-red-600 text-white p-1 rounded-full">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"></path></svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h4 class="font-bold text-xl text-navy-800">Bapak Johannes</h4>
                            <p class="text-red-600 font-medium">Umat Pertama</p>
                        </div>
                    </div>
                    <p class="text-gray-700 leading-relaxed">"Saya masih ingat bagaimana kami memulai komunitas ini dari nol. Dengan semangat dan doa, kami membangun gereja ini bersama-sama."</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-2xl border-l-4 border-navy-800 hover:transform hover:scale-105 transition-all duration-300">
                    <div class="flex items-center mb-6">
                        <div class="relative">
                            <img src="{{ asset('images/testimonial-2.jpg') }}" class="w-16 h-16 rounded-full border-2 border-red-600">
                            <div class="absolute -bottom-2 -right-2 bg-navy-800 text-white p-1 rounded-full">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"></path></svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h4 class="font-bold text-xl text-navy-800">Ibu Maria</h4>
                            <p class="text-red-600 font-medium">Pengurus Pertama</p>
                        </div>
                    </div>
                    <p class="text-gray-700 leading-relaxed">"Melihat perkembangan gereja ini dari tahun ke tahun sungguh membuat hati saya bersyukur. Tuhan sungguh baik."</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.animate-fade-in {
    animation: fadeIn 1.2s ease-out;
}

@keyframes fadeIn {
    0% { opacity: 0; transform: translateY(30px); }
    100% { opacity: 1; transform: translateY(0); }
}

.bg-pattern {
    background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.bg-navy-50 { background-color: #f0f4f8; }
.bg-navy-700 { background-color: #1a365d; }
.bg-navy-800 { background-color: #1e3a8a; }
.bg-navy-900 { background-color: #0f2957; }
.text-navy-800 { color: #1e3a8a; }
</style>
@endsection