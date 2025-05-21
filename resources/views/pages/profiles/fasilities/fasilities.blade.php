@extends('layouts.app')

@section('content')
<div class="w-full">
    <!-- Header Section -->
    <div class="relative overflow-hidden bg-blue-600 text-white h-[280px]">
        <!-- Dot Pattern Overlay -->
        <div class="absolute inset-0">
            <img src="{{ asset('images/efek.png') }}" alt="Pattern" class="w-full h-full object-cover opacity-20">
        </div>

        <!-- Content Container -->
        <div class="container mx-auto relative h-full flex items-center">
            <div>
                <h1 class="text-white font-bold text-4xl mb-3">SARANA & PRASARANA</h1>
                <p class="uppercase text-white mb-4 tracking-wide">MAL PELAYANAN PUBLIK KABUPATEN BANGKALAN</p>
                <a href="{{ route('home') }}" class="inline-flex items-center gap-2 bg-white text-blue-800 px-4 py-2 rounded transition hover:bg-gray-200">
                    <i class="bi bi-house-fill"></i>
                    <span>Beranda</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Facilities Grid Section -->
    <div class="container mx-auto mt-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
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
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-1 hover:bg-yellow-300 hover:border-yellow-200 border-2 border-transparent">
                    <img src="{{ asset('images/' . $item['img']) }}" alt="{{ $item['title'] }}" class="w-full h-48 object-cover">
                    <div class="p-4 text-center">
                        <h5 class="uppercase text-lg font-semibold text-blue-900 group-hover:text-blue-800">{{ $item['title'] }}</h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
