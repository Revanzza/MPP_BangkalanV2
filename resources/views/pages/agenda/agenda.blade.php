@extends('layouts.app')

@section('content')
<!-- Header Section dengan spacing dan background terkontrol -->
<div class="relative h-[400px] text-white py-5 overflow-hidden bg-blue-600">
    <!-- Background Image dengan container dan spacing -->
    <div class="absolute inset-0 flex justify-center items-start pt-[50px]">
        <div class="bg-cover bg-center opacity-90 w-[65%] h-[calc(70%-20px)]"
            style="background-image: url('{{ asset('images/berita2.jpg') }}');">
        </div>
    </div>
    
    <!-- Overlay Box dengan jarak vertikal -->
    <div class="container absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-white rounded-lg p-5 max-w-[600px] mt-12 shadow-xl">
        <h1 class="font-bold text-center text-[#0056b3] text-3xl">AGENDA KEGIATAN</h1>
        <p class="text-center text-[#0056b3] mt-2">MAL PELAYAN PUBLIK KABUPATEN BANGKALAN</p>
        <div class="text-center mt-4">
            <a href="{{ route('home') }}" class="inline-flex items-center px-5 py-2.5 border border-[#0056b3] rounded-md text-[#0056b3] hover:bg-[#0056b3] hover:text-white transition-all">
                <i class="bi bi-house-door mr-2"></i> Beranda
            </a>
        </div>
    </div>
</div>

<!-- Agenda List Section -->
<div class="container py-12">
    <!-- Konten agenda list -->
</div>
@endsection