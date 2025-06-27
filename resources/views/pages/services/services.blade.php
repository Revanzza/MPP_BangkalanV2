@extends('layouts.app')

@section('content')
<!-- Service Section (Tailwind absolute overlay style) -->
<div class="relative bg-[#1E90FF] text-white py-5" style="height: 400px;">
    <!-- Background Image -->
    <div class="absolute inset-0 w-full h-full" style="background-image: url('{{ asset('storage/banners/berita2.jpg') }}'); background-size: cover; background-position: center;"></div>
    <!-- Overlay Box -->
    <div class="absolute flex flex-col items-center w-full max-w-xl p-8 -translate-x-1/2 -translate-y-1/2 bg-white rounded-lg shadow-lg left-1/2 top-1/2">
        <h1 class="text-2xl font-bold text-center md:text-3xl" style="color: #0056b3;">LAYANAN</h1>
        <p class="mt-2 text-center" style="color: #0056b3;">MAL PELAYANAN PUBLIK KABUPATEN BANGKALAN</p>
        <div class="mt-4 text-center">
            <a href="{{ route('home') }}" class="inline-flex items-center px-5 py-2 border border-[#1E90FF] text-[#1E90FF] rounded hover:bg-[#1E90FF] hover:text-white transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7m-9 2v6m4-6v6m5 0a2 2 0 002-2V7a2 2 0 00-2-2h-3.5a2 2 0 00-2 2v1" />
                </svg>
                Beranda
            </a>
        </div>
    </div>
    </div>

    <!-- Grid Instansi/Services -->
    <div class="relative z-10 max-w-6xl mx-auto -mt-20 mb-10 px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach($institutions as $institution)
                <div class="flex flex-col items-center p-6 transition-all duration-300 bg-yellow-400 border border-gray-200 rounded-lg shadow group hover:-translate-y-1 hover:shadow-lg">
                    <div class="flex items-center justify-center w-full h-32 mb-4">
                        <img src="{{ asset('storage/logo/' . $institution->logo_institution) }}" alt="{{ $institution->nama_institution }}" class="object-contain mx-auto max-h-28">
                    </div>
                    <div class="flex flex-col justify-between flex-1 w-full">
                        <p class="text-center text-sm text-gray-800 font-semibold mb-4 min-h-[40px] line-clamp-2">{{ $institution->nama_institution }}</p>
                        <a href="{{ route('services.instansi', ['slug' => $institution->slug]) }}" class="inline-block px-3 py-2 text-sm text-[#1E90FF] transition-all duration-300 border border-[#1E90FF] rounded hover:bg-[#1E90FF] hover:text-white">
                            Baca Selengkapnya
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection