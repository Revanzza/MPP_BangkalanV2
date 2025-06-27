@extends('layouts.app')

@section('content')
<div class="w-full">
    <!-- Header Section -->
    <div class="relative bg-[#1E90FF] text-white overflow-hidden h-[280px]">
        <!-- Dot Pattern Overlay -->
        <div class="absolute top-0 right-0 h-full w-full opacity-20">
            <img src="{{ asset('images/efek.png') }}" 
                 alt="Pattern" 
                 class="h-full w-full object-cover">
        </div>

        <!-- Content Container -->
        <div class="container mx-auto relative h-full flex items-center px-4">
            <div class="pb-8">
                <h1 class="text-4xl font-bold mb-3">VISI & MISI</h1>
                <p class="uppercase text-white mb-4">MAL PELAYANAN PUBLIK KABUPATEN BANGKALAN</p>
                <div class="inline-block">
                    <a href="{{ route('home') }}" class="inline-flex items-center gap-2 bg-white text-[#1E90FF] px-4 py-2 rounded transition hover:bg-gray-200">
                        <i class="bi bi-house-fill"></i>
                        <span>Beranda</span>
                    </a>
                </div>
            </div>
        </div>        
    </div>

    <!-- Description Section -->
    <div class="container mx-auto my-12 px-6 sm:px-10 lg:px-16">
        <div class="max-w-7xl mx-auto">
            <p class="text-center text-gray-600 text-xl leading-7">
                Dalam era digital saat ini, kebutuhan akan teknologi informasi menjadi salah satu hal yang sangat penting. MPP Kabupaten Bangkalan terus berupaya mengembangkan sistem pelayanan publik untuk memberikan hasil yang baik secara efisien dan efektif. Meningkatkan kualitas pelayanan kepada masyarakat dengan melakukan pengembangan layanan yang telah sesuai standarisasi dan melengkapi sarana serta prasarana yang ada secara terprogram untuk memberikan solusi yang terbaik untuk pengguna layanan.
            </p>
        </div>
    </div>


    <!-- Vision & Mission Cards -->
    <div class="container mx-auto mb-16 px-4">
        <div class="grid md:grid-cols-2 gap-6">
            <!-- Vision Card -->
            <div class="bg-[#1E90FF] text-white p-6 rounded-lg shadow">
                <h2 class="text-3xl font-bold mb-4 text-center">VISI</h2>
                <p class="text-base leading-relaxed">
                    " Terwujudnya Masyarakat Kabupaten Bangkalan Yang Religius dan Sejahtera Berbasis Digital "
                </p>
            </div>

            <!-- Mission Card -->
            <div class="bg-[#1E90FF] text-white p-6 rounded-lg shadow">
                <h2 class="text-3xl font-bold mb-4 text-center">MISI</h2>
                <ul class="space-y-4">
                    <li class="flex gap-3 items-start">
                        <i class="bi bi-check-circle-fill mt-1"></i>
                        <span>Mewujudkan Kehidupan Beragama Berkualitas</span>
                    </li>
                    <li class="flex gap-3 items-start">
                        <i class="bi bi-check-circle-fill mt-1"></i>
                        <span>Meningkatkan Standar Kehidupan dan Daya Saing Tinggi</span>
                    </li>
                    <li class="flex gap-3 items-start">
                        <i class="bi bi-check-circle-fill mt-1"></i>
                        <span>Meningkatkan Pelayanan Dasar Berkualitas Dan Yang Adanya Kesuksesan Serta Dan Kepuasan Dari Semua Masyarakat Terhadap Layanan Kami</span>
                    </li>
                    <li class="flex gap-3 items-start">
                        <i class="bi bi-check-circle-fill mt-1"></i>
                        <span>Menjadikan Kota Aman Dan Adil Pada Masyarakat</span>
                    </li>
                    <li class="flex gap-3 items-start">
                        <i class="bi bi-check-circle-fill mt-1"></i>
                        <span>Akselarasi Pembangunan Infrastruktur Yang Berbasis Demi Pertumbuhan Mengingat Daya Saing Dan Pemulihan Ekonomi Untuk Iklim Investasi</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
