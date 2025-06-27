@extends('layouts.app')

@section('content')
<!-- Header Section dengan spacing dan background terkontrol -->
<div class="relative h-[400px] text-white py-5 overflow-hidden bg-[#1E90FF]">
    <!-- Background Image dengan container dan spacing -->
    <div class="absolute inset-0 flex justify-center items-start pt-[50px]">
        <div class="bg-cover bg-center opacity-90 w-[65%] h-[calc(70%-20px)]"
            style="background-image: url('{{ asset('images/berita2.jpg') }}');">
        </div>
    </div>
    
    <!-- Overlay Box dengan jarak vertikal -->
    <div class="container absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-white rounded-lg p-5 max-w-[600px] mt-12 shadow-xl">
        <h1 class="font-bold text-center text-[#1E90FF] text-3xl">INFORMASI</h1>
        <p class="text-center text-[#1E90FF] mt-2">MAL PELAYAN PUBLIK KABUPATEN BANGKALAN</p>
        <div class="mt-4 text-center">
            <a href="{{ route('home') }}" class="inline-flex items-center px-5 py-2.5 border border-[#1E90FF] rounded-md text-[#1E90FF] hover:bg-[#1E90FF] hover:text-white transition-all">
                <i class="mr-2 bi bi-house-door"></i> Beranda
            </a>
        </div>
    </div>
</div>

<!-- Information List Section -->
<div class="flex justify-center py-12">
    <div class="w-full max-w-5xl px-4">
        <x-information.information-index :informations="$informations" />
    </div>
</div>
@endsection