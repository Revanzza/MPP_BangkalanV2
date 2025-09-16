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
        <div class="container relative flex items-center h-full px-4 mx-auto">
            <div class="pb-8">
                <h1 class="mb-3 text-4xl font-bold">PRESTASI & INOVASI</h1>
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

    <!-- Prestasi & Inovasi Section -->
    <div class="container px-4 mx-auto mb-12">
        <div class="flex justify-center">
            <div class="w-full max-w-4xl">
                <div class="mt-12 bg-[#1E90FF] text-white rounded-lg shadow-lg p-6 sm:p-8">
                    <h2 class="mb-6 text-2xl font-bold sm:text-3xl">PRESTASI</h2>
                    <ol class="pl-6 space-y-4 list-decimal">
                        <li>
                            <strong>Penghargaan Pelayanan Publik Terbaik Tingkat Provinsi Jawa Timur (2024)</strong>
                            <br>
                            MPP Bangkalan berhasil meraih penghargaan sebagai salah satu MPP dengan standar layanan prima dan kepuasan masyarakat tinggi.
                        </li>
                        <li>
                            <strong>Indeks Kepuasan Masyarakat (IKM) di Atas 90%</strong>
                            <br>
                            Berdasarkan survei internal, mayoritas masyarakat merasa puas terhadap layanan cepat dan ramah di MPP Bangkalan.
                        </li>
                    </ol>

                    <h2 class="mt-10 mb-6 text-2xl font-bold sm:text-3xl">INOVASI</h2>
                    <ol class="pl-6 space-y-4 list-decimal">
                        <li>
                            <strong>Informasi Layanan Lengkap</strong>
                            <br>
                            Web menampilkan daftar layanan instansi yang ada di MPP (misalnya Dukcapil, BPJS, Perbankan, PLN, dll) beserta syarat dokumen dan biaya, supaya masyarakat tidak bingung saat datang.
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection