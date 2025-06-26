@extends('layouts.app')

@section('content')
<!-- Agenda Detail Section -->
<div class="w-full">
    <!-- Banner Section -->
    <div class="relative">
        <img src="{{ asset('images/berita2.jpg') }}" alt="Agenda Banner" class="w-full h-[400px] object-cover">
        <div class="absolute flex flex-col items-center max-w-xl p-6 -translate-x-1/2 -translate-y-1/2 rounded-lg shadow-lg top-1/2 left-1/2 bg-white/90">
            <h1 class="font-bold text-2xl md:text-3xl text-[#0056b3] text-center">{{ $agenda->nama_agenda }}</h1>
            <p class="mt-2 text-center text-gray-600">{{ $agenda->penyelenggara ?? 'Mal Pelayanan Publik Kabupaten Bangkalan' }}</p>
            <div class="flex items-center justify-center gap-4 mt-3 text-sm text-gray-700">
                <span class="flex items-center gap-1">
                    <i class="bi bi-calendar-event"></i>
                    {{ \Carbon\Carbon::parse($agenda->waktu_pelaksanaan)->translatedFormat('d F Y') }}
                </span>
                <span>|</span>
                <span class="flex items-center gap-1">
                    <i class="bi bi-geo-alt"></i>
                    {{ $agenda->tempat }}
                </span>
            </div>
            <a href="{{ route('agenda.index') }}" class="mt-4 inline-block px-6 py-2 rounded bg-[#0056b3] text-white font-semibold shadow hover:bg-blue-800 transition">Agenda Kegiatan</a>
        </div>
    </div>

    <!-- Main Content Section -->
    <div class="container px-4 mx-auto mt-10">
        <div class="flex flex-col gap-8 lg:flex-row">
            <!-- Main Article -->
            <div class="w-full lg:w-2/3">
                <div class="mb-6">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('images/mpp-bangkalan.png') }}" alt="MPP Bangkalan Logo" class="object-contain w-12 h-12 mr-3 rounded-full">
                        <h5 class="font-bold text-lg text-[#0056b3] mb-0">MPP Bangkalan</h5>
                    </div>
                    <div class="prose text-gray-800 max-w-none">
                        @if($agenda->foto_agenda)
                            <img src="{{ asset('storage/' . $agenda->foto_agenda) }}" alt="Foto Agenda" class="object-cover w-full mb-4 rounded shadow max-h-96">
                            <h2 class="mt-2 mb-4 text-xl font-bold text-[#17191c]">{{ $agenda->nama_agenda }}</h2>
                        @endif
                        {!! modifyContent($agenda->deskripsi) !!}
                    </div>
                </div>
            </div>

            <!-- Right Sidebar -->
            <div class="flex flex-col w-full gap-6 lg:w-1/3">
                <!-- Social Media Links -->
                <div class="p-4 bg-white rounded-lg shadow">
                    <h6 class="font-bold mb-3 text-center text-[#0056b3]">Bagikan:</h6>
                    <div class="flex justify-center gap-4 text-2xl text-gray-600">
                        <a href="#" class="hover:text-blue-600"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="hover:text-sky-400"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="hover:text-pink-500"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="hover:text-blue-700"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="hover:text-green-500"><i class="bi bi-whatsapp"></i></a>
                        <a href="#" class="hover:text-gray-800"><i class="bi bi-share"></i></a>
                    </div>
                </div>

                <!-- Related Agendas (Dummy Loop, ganti dengan data asli jika ada) -->
                <div class="p-4 bg-white rounded-lg shadow">
                    <h6 class="font-bold mb-3 text-[#0056b3]">Agenda Lainnya</h6>
                    <div class="flex flex-col gap-3">
                        @for ($i = 1; $i <= 4; $i++)
                        <div class="flex overflow-hidden rounded shadow-sm bg-gray-50">
                            <img src="{{ asset('storage/banners/berita2.jpg') }}" class="object-cover w-20 h-20" alt="Agenda Thumbnail">
                            <div class="flex flex-col justify-center px-3 py-2">
                                <p class="mb-1 text-sm font-semibold">Diskominfo Bangkalan Gelar Bimtek Penguatan Implementasi PPID</p>
                                <a href="#" class="flex items-center gap-1 text-xs font-semibold text-blue-700 hover:underline">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection