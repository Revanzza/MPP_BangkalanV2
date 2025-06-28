@extends('layouts.app')

@section('content')
<!-- Service Section (Tailwind absolute overlay style) -->
<div class="relative bg-[#1E90FF] text-white py-5" style="height: 400px;">
    <!-- Background Image -->
    <div class="absolute inset-0 w-full h-full" style="background-image: url('{{ asset('storage/banners/berita2.jpg') }}'); background-size: cover; background-position: center;"></div>
    <!-- Overlay Box -->
    <div class="absolute flex flex-col items-center w-full max-w-xl p-8 -translate-x-1/2 -translate-y-1/2 bg-white rounded-lg shadow-lg left-1/2 top-1/2">
        <h1 class="text-2xl font-bold text-center md:text-3xl" style="color: #1E90FF;">LAYANAN</h1>
        <p class="mt-2 text-center" style="color: #1E90FF;">MAL PELAYANAN PUBLIK KABUPATEN BANGKALAN</p>
        <div class="mt-4 text-center">
            <a href="{{ route('home') }}" class="inline-flex items-center px-5 py-2 border border-[#1E90FF] text-[#1E90FF] rounded hover:bg-[#1E90FF] hover:text-white transition">
                Beranda
            </a>
        </div>
    </div>
</div>

<!-- Grid Instansi/Services (di luar section biru) -->
<div class="relative z-10 max-w-6xl px-4 mx-auto mt-10 mb-10">
    <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3">
        @foreach($institutions as $institution)
            <x-services.instansi-card :institution="$institution" />
        @endforeach
    </div>
</div>
@endsection