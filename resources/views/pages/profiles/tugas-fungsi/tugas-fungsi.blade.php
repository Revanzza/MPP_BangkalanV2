@extends('layouts.app')

@section('content')
<div class="w-full">
    <!-- Header Section -->
    <div class="relative bg-[#1E90FF] text-white overflow-hidden h-[280px]">
        <!-- Dot Pattern Overlay -->
        <div class="absolute top-0 right-0 w-full h-full opacity-20">
            <img src="{{ asset('images/efek.png') }}" 
                 alt="Pattern" 
                 class="object-cover w-full h-full">
        </div>

        <!-- Content Container -->
        <div class="container relative flex items-center h-full px-4 mx-auto">
            <div class="pb-8">
                <h1 class="mb-3 text-4xl font-bold">TUGAS & FUNGSI</h1>
                <p class="mb-4 text-white uppercase">MAL PELAYANAN PUBLIK KABUPATEN BANGKALAN</p>
                <div class="inline-block">
                    <a href="{{ route('home') }}" class="inline-flex items-center gap-2 bg-white text-[#1E90FF] px-4 py-2 rounded transition hover:bg-gray-200">
                        <i class="bi bi-house-fill"></i>
                        <span>Beranda</span>
                    </a>
                </div>
            </div>
        </div>        
    </div>
</div>
@endsection
