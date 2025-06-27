@extends('layouts.app')

@section('content')
<div class="w-full">
    <!-- Header Section -->
    <div class="relative overflow-hidden bg-[#1E90FF] text-white h-[280px]">
        <!-- Dot Pattern Overlay -->
        <div class="absolute inset-0">
            <img src="{{ asset('images/efek.png') }}" alt="Pattern" class="object-cover w-full h-full opacity-20">
        </div>

        <!-- Content Container -->
        <div class="container relative flex items-center h-full mx-auto">
            <div>
                <h1 class="mb-3 text-4xl font-bold text-white">SARANA & PRASARANA</h1>
                <p class="mb-4 tracking-wide text-white uppercase">MAL PELAYANAN PUBLIK KABUPATEN BANGKALAN</p>
                <a href="{{ route('home') }}" class="inline-flex items-center gap-2 bg-white text-[#1E90FF] px-4 py-2 rounded transition hover:bg-gray-200">
                    <i class="bi bi-house-fill"></i>
                    <span>Beranda</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Facilities Grid Section -->
    <div class="container mx-auto mt-10">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @php
                $fasilitas = [
                    ['img' => 'RuangTunggu.jpg', 'title' => 'Ruang Tunggu'],
                    ['img' => 'MediaInformasi.jpg', 'title' => 'Media Informasi'],
                    ['img' => 'PendinginRuangan.jpg', 'title' => 'Pendingin Ruangan'],
                    ['img' => 'InformasiAntrian.jpg', 'title' => 'Informasi Antrian'],
                    ['img' => 'Informasi.jpg', 'title' => 'Informasi'],
                    ['img' => 'Musholla.jpg', 'title' => 'Musholla'],
                    ['img' => 'SmokingArea.jpg', 'title' => 'Smooking Area'],
                    ['img' => 'RuangTunggu2.jpg', 'title' => 'Ruang Tunggu'],
                    ['img' => 'RuangLayanan.jpg', 'title' => 'Ruang Layanan'],
                    ['img' => 'RuangP3K.jpg', 'title' => 'Ruang P3K'],
                    ['img' => 'KursiRoda.jpg', 'title' => 'Kursi Roda'],
                    ['img' => 'RuangBermain.jpg', 'title' => 'Ruang Bermain'],
                    ['img' => 'RuangLaktasi.jpg', 'title' => 'Ruang Laktasi'],
                    ['img' => 'MesinAntrian.jpg', 'title' => 'Mesin Antrian'],
                    ['img' => 'KotakSaran.jpg', 'title' => 'Kotak Saran'],
                    ['img' => 'Parkir.jpg', 'title' => 'Tempat Parkir'],
                ];
            @endphp

            @foreach ($fasilitas as $item)
                <div class="overflow-hidden transition-transform duration-300 bg-white border-2 border-transparent rounded-lg shadow-md hover:-translate-y-1 hover:bg-yellow-300 hover:border-yellow-200">
                    <img src="{{ asset('images/' . $item['img']) }}" alt="{{ $item['title'] }}" class="object-cover w-full h-48">
                    <div class="p-4 text-center">
                        <h5 class="uppercase text-lg font-semibold text-[#1E90FF] group-hover:text-[#1E90FF]">{{ $item['title'] }}</h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
