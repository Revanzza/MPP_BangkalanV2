@extends('layouts.app')

@section('content')
<div class="w-full">
    <!-- Header Section -->
    <div class="relative bg-blue-600 text-white overflow-hidden h-[280px]">
        <!-- Dot Pattern Overlay -->
        <div class="absolute top-0 right-0 h-full w-full opacity-20">
            <img src="{{ asset('images/efek.png') }}" 
                 alt="Pattern" 
                 class="h-full w-full object-cover">
        </div>

        <!-- Content Container -->
        <div class="container mx-auto relative h-full flex items-center px-4">
            <div class="pb-8">
                <h1 class="text-4xl font-bold mb-3">KEPEMIMPINAN</h1>
                <p class="uppercase text-white mb-4">MAL PELAYANAN PUBLIK KABUPATEN BANGKALAN</p>
                <div class="inline-block">
                    <a href="{{ route('home') }}" class="inline-flex items-center gap-2 bg-white text-blue-800 px-4 py-2 rounded transition hover:bg-gray-200">
                        <i class="bi bi-house-fill"></i>
                        <span>Beranda</span>
                    </a>
                </div>
            </div>
        </div>        
    </div>
</div>
@endsection
