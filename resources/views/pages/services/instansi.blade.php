@extends('layouts.app')

@section('content')
<!-- Service Section (Tailwind absolute overlay style) -->
<div class="relative flex items-center justify-center bg-[#1E90FF] text-white py-5" style="height: 400px;">
    <!-- Background Image -->
    <div class="flex items-center justify-center inset-0 h-[300px] w-[800px]" style="background-image: url('{{ asset('images/informasi.jpg') }}'); background-size: cover; background-position: center;"></div>
    <!-- Overlay Box -->
    <div class="absolute flex flex-col items-center w-full max-w-xl p-8 -translate-x-1/2 -translate-y-1/2 bg-white rounded-lg shadow-lg left-1/2 top-1/2">
        <h1 class="text-2xl font-bold text-center md:text-3xl" style="color: #1E90FF;">{{ $instansi->nama_institution }}</h1>
        <p class="mt-2 text-center" style="color: #1E90FF;">MAL PELAYANAN PUBLIK KABUPATEN BANGKALAN</p>
        <div class="mt-4 text-center">
            <a href="{{ route('home') }}" class="inline-flex items-center px-5 py-2 border border-[#1E90FF] text-[#1E90FF] rounded hover:bg-[#1E90FF] hover:text-white transition">
                Beranda
            </a>
        </div>
    </div>
</div>

<!-- Daftar Layanan Instansi -->
<div class="max-w-4xl mx-auto mt-10">
    <h2 class="text-lg font-semibold text-[#1E90FF] mb-4 text-center">Daftar Layanan</h2>
    @foreach($instansi->services as $layanan)
        <x-services.layanan-card :layanan="$layanan" :loop="$loop" />
    @endforeach
</div>

@endsection