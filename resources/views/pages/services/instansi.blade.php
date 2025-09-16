@extends('layouts.app')

@section('content')
<!-- Service Section (Tailwind absolute overlay style) -->
<div class="relative flex items-center justify-center bg-[#1E90FF] text-white py-5" style="height: 400px;">
    <!-- Background Image -->
    <div class="flex items-center justify-center inset-0 h-[300px] w-[800px]" style="background-image: url('{{ asset('images/informasi.jpg') }}'); background-size: cover; background-position: center;"></div>
    <!-- Overlay Box -->
    <div class="absolute flex flex-col items-center w-full max-w-xl p-8 -translate-x-1/2 -translate-y-1/2 bg-white rounded-lg shadow-lg left-1/2 top-1/2">
        <h1 class="text-2xl font-bold text-center md:text-3xl" style="color: #1E90FF;">{{ $instansi->nama_institution }}</h1>
        <p class="mt-2 text-center" style="color: #1E90FF;">MAL PELAYANAN PUBLIK KABUPATEN BANGKALAN</p>
        <div class="mt-4 text-center">
            <a href="{{ route('home') }}" class="inline-flex items-center px-5 py-2 border border-[#1E90FF] text-[#1E90FF] rounded hover:bg-[#1E90FF] hover:text-white transition">
                Beranda
            </a>
        </div>
    </div>
</div>


<!-- Daftar Layanan Instansi -->
<div class="max-w-4xl mx-auto mt-10">
    <h2 class="text-lg font-semibold text-[#1E90FF] mb-6 text-center">Daftar Layanan</h2>

    <!-- Button to show form -->
    <div class="flex justify-center mb-6">
        <button id="showAntreanFormBtn" class="px-6 py-2 bg-[#1E90FF] text-white font-bold rounded hover:bg-[#007acc] focus:outline-none">Form Daftar Antrian</button>
    </div>

    <!-- Antrean Form (hidden by default, hardcoded) -->
    <div id="antreanFormContainer" class="hidden mb-8">
        <form method="POST" action="{{ route('antrean.store') }}" class="max-w-lg p-5 mx-auto space-y-4 bg-white rounded-lg shadow-md">
            @csrf
            <input type="hidden" name="institution_id" value="{{ $instansi->id }}">
            <div>
                <label for="nama" class="block mb-1 text-sm font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" name="nama" id="nama" class="block w-full border border-gray-300 rounded-md shadow-sm focus:ring-[#1E90FF] focus:border-[#1E90FF] px-3 py-2" required>
            </div>
            <div>
                <label for="nik" class="block mb-1 text-sm font-medium text-gray-700">NIK</label>
                <input type="text" name="nik" id="nik" class="block w-full border border-gray-300 rounded-md shadow-sm focus:ring-[#1E90FF] focus:border-[#1E90FF] px-3 py-2" required>
            </div>
            <div>
                <label for="no_hp" class="block mb-1 text-sm font-medium text-gray-700">No. HP</label>
                <input type="text" name="no_hp" id="no_hp" class="block w-full border border-gray-300 rounded-md shadow-sm focus:ring-[#1E90FF] focus:border-[#1E90FF] px-3 py-2" required>
            </div>
            <div>
                <label for="id_service" class="block mb-1 text-sm font-medium text-gray-700">Layanan</label>
                <select name="id_service" id="id_service" class="block w-full border border-gray-300 rounded-md shadow-sm focus:ring-[#1E90FF] focus:border-[#1E90FF] px-3 py-2" required>
                    <option value="">Pilih Layanan</option>
                    @foreach($instansi->services as $layanan)
                        <option value="{{ $layanan->id }}" style="color:#222;">{{ $layanan->nama_layanan }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="tanggal" class="block mb-1 text-sm font-medium text-gray-700">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" class="block w-full border border-gray-300 rounded-md shadow-sm focus:ring-[#1E90FF] focus:border-[#1E90FF] px-3 py-2" required>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="px-6 py-2 bg-[#1E90FF] text-white font-bold rounded hover:bg-[#007acc] focus:outline-none">Daftar</button>
            </div>
        </form>
        @if(session('success'))
            <script>
                alert("{{ session('success') }}");
            </script>
        @endif
    </div>

    <div class="space-y-4">
        @foreach($instansi->services as $layanan)
            <x-services.layanan-card :layanan="$layanan" :loop="$loop" />
        @endforeach
    </div>

    <!-- Informasi Instansi (ukuran lebih kecil, mirip sebelumnya) -->
    <div class="mt-8 text-base text-gray-900">
        <div class="mb-1">
            <span class="font-bold text-black">Website:</span>
            @if($instansi->website_institution && $instansi->website_institution != '-')
                <a href="{{ $instansi->website_institution }}" target="_blank" class="text-black underline">{{ $instansi->website_institution }}</a>
            @else
                <span class="italic text-gray-400">Belum tersedia</span>
            @endif
        </div>
        <div class="mb-1">
            <span class="font-bold text-black">Alamat:</span>
            <span>{{ $instansi->alamat_institution ?? '-' }}</span>
        </div>
        <div>
            <span class="font-bold text-black">Nomor Instansi:</span>
            @if($instansi->no_institution && $instansi->no_institution != '-' && $instansi->no_institution != 'NULL')
                <span>{{ $instansi->no_institution }}</span>
            @else
                <span class="italic text-gray-400">Belum tersedia</span>
            @endif
        </div>
    </div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var btn = document.getElementById('showAntreanFormBtn');
        var form = document.getElementById('antreanFormContainer');
        if(btn && form) {
            btn.addEventListener('click', function() {
                form.classList.toggle('hidden');
                form.scrollIntoView({ behavior: 'smooth' });
            });
        }
    });
</script>

@endsection