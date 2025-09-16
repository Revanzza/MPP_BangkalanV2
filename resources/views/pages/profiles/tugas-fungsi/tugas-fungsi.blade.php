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

    <!-- Tugas & Fungsi Cards -->
    <div class="container px-4 mx-auto mt-8 mb-16">
        <div class="grid gap-6 md:grid-cols-2">
            <!-- Tugas Card -->
            <div class="bg-[#1E90FF] text-white p-6 rounded-lg shadow">
                <h2 class="mb-4 text-3xl font-bold text-center">TUGAS</h2>
                <ul class="pl-5 space-y-4 list-disc">
                    <li>Menyelenggarakan pelayanan administrasi terpadu kepada masyarakat secara cepat, mudah, terjangkau, aman, dan nyaman.</li>
                    <li>Mengintegrasikan berbagai jenis pelayanan dari instansi pemerintah pusat, pemerintah daerah, BUMN, BUMD, dan pihak swasta dalam satu tempat.</li>
                    <li>Menyediakan sarana, prasarana, serta sistem informasi yang mendukung transparansi dan akuntabilitas pelayanan publik.</li>
                    <li>Melaksanakan koordinasi dengan instansi penyelenggara layanan guna meningkatkan kualitas dan kecepatan layanan.</li>
                    <li>Menyusun laporan, evaluasi, dan rekomendasi terkait peningkatan kualitas pelayanan publik di Kabupaten Bangkalan.</li>
                </ul>
            </div>

            <!-- Fungsi Card -->
            <div class="bg-[#1E90FF] text-white p-6 rounded-lg shadow">
                <h2 class="mb-4 text-3xl font-bold text-center">FUNGSI</h2>
                <ul class="pl-5 space-y-4 list-disc">
                    <li>
                        <strong>Fungsi Koordinasi:</strong>
                        <br>
                        Menghubungkan dan mengintegrasikan pelayanan dari berbagai instansi dalam satu gedung MPP.
                    </li>
                    <li>
                        <strong>Fungsi Fasilitasi:</strong>
                        <br>
                        Menyediakan sarana fisik, teknologi informasi, serta sumber daya manusia untuk kelancaran pelayanan publik.
                    </li>
                    <li>
                        <strong>Fungsi Pelayanan:</strong>
                        <br>
                        Memberikan pelayanan langsung kepada masyarakat dalam berbagai urusan, seperti administrasi kependudukan, perizinan, pajak, kesehatan, ketenagakerjaan, hingga layanan swasta (perbankan, BPJS, PLN, dll).
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection