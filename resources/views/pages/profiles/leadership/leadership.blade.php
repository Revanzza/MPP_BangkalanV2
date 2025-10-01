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
                <h1 class="mb-3 text-4xl font-bold">KEPEMIMPINAN</h1>
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

    <!-- Leadership Profile Section -->
    <div class="container px-4 py-16 mx-auto">
        <div class="max-w-4xl mx-auto">
            <!-- Section Title -->
            <div class="mb-12 text-center">
                <h2 class="mb-3 text-3xl font-bold text-gray-800">Profil Pimpinan</h2>
                <div class="w-20 h-1 bg-[#1E90FF] mx-auto rounded"></div>
            </div>

            <!-- Leader Card -->
            @if(isset($leader))
            <div class="overflow-hidden transition duration-500 transform bg-white shadow-2xl rounded-2xl hover:-translate-y-2 hover:shadow-3xl">
                <div class="md:flex">
                    <!-- Photo Section -->
                    <div class="md:w-2/5 bg-gradient-to-br from-[#1E90FF] to-[#1565C0] p-8 flex items-center justify-center">
                        @if($leader->photo)
                            <img src="{{ Storage::url($leader->photo) }}" 
                                 alt="{{ $leader->name }}"
                                 class="object-cover w-64 h-64 border-8 border-white rounded-full shadow-xl">
                        @else
                            <div class="flex items-center justify-center w-64 h-64 border-8 border-white rounded-full shadow-xl bg-white/20">
                                <svg class="w-32 h-32 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                </svg>
                            </div>
                        @endif
                    </div>

                    <!-- Info Section -->
                    <div class="p-8 md:w-3/5">
                        <div class="space-y-6">
                            <!-- Name & Position -->
                            <div>
                                <h3 class="mb-2 text-3xl font-bold text-gray-800">{{ $leader->name }}</h3>
                                <p class="text-xl text-[#1E90FF] font-semibold">{{ $leader->position }}</p>
                            </div>

                            <!-- Divider -->
                            <div class="w-full h-px bg-gray-200"></div>

                            <!-- Biography -->
                            @if($leader->biography)
                            <div>
                                <h4 class="flex items-center gap-2 mb-2 text-lg font-semibold text-gray-700">
                                    <i class="bi bi-person-lines-fill text-[#1E90FF]"></i>
                                    Profil
                                </h4>
                                <p class="leading-relaxed text-gray-600">{{ $leader->biography }}</p>
                            </div>
                            @endif

                            <!-- Contact Information -->
                            <div class="space-y-3">
                                <h4 class="flex items-center gap-2 mb-3 text-lg font-semibold text-gray-700">
                                    <i class="bi bi-envelope-fill text-[#1E90FF]"></i>
                                    Kontak
                                </h4>
                                
                                @if($leader->email)
                                <div class="flex items-start gap-3 text-gray-600">
                                    <i class="bi bi-envelope text-[#1E90FF] mt-1"></i>
                                    <div>
                                        <p class="text-sm text-gray-500">Email</p>
                                        <a href="mailto:{{ $leader->email }}" class="hover:text-[#1E90FF] transition">
                                            {{ $leader->email }}
                                        </a>
                                    </div>
                                </div>
                                @endif

                                @if($leader->phone)
                                <div class="flex items-start gap-3 text-gray-600">
                                    <i class="bi bi-telephone-fill text-[#1E90FF] mt-1"></i>
                                    <div>
                                        <p class="text-sm text-gray-500">Telepon</p>
                                        <a href="tel:{{ $leader->phone }}" class="hover:text-[#1E90FF] transition">
                                            {{ $leader->phone }}
                                        </a>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <!-- Empty State -->
            <div class="p-12 text-center bg-white shadow-lg rounded-2xl">
                <div class="flex items-center justify-center w-24 h-24 mx-auto mb-6 bg-gray-100 rounded-full">
                    <i class="text-4xl text-gray-400 bi bi-person-x"></i>
                </div>
                <h3 class="mb-2 text-xl font-semibold text-gray-700">Data Pimpinan Belum Tersedia</h3>
                <p class="text-gray-500">Informasi profil pimpinan akan segera ditampilkan.</p>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection