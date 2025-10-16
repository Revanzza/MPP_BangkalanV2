@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="py-10 bg-gray-100">
    <div class="container px-4 mx-auto">
        <h1 class="text-4xl font-bold">SELAMAT DATANG</h1>
        <h2 class="text-2xl text-gray-600">DI MAL PELAYANAN PUBLIK</h2>
        <div class="inline-block bg-[#1E90FF] text-white px-4 py-1 mt-4 rounded">
            <p class="mb-0">Kabupaten Bangkalan</p>
        </div>
        <p class="mt-4 text-gray-600">
            Bangkalan Plaza Lt. 3, Jl. Halim Perdana Kusuma, Area Sawah, Mlajah, Kec. Bangkalan, Kabupaten Bangkalan, Jawa Timur 69116
        </p>
        <img src="{{ asset('images/mpp-building.jpg') }}" alt="MPP Building" class="w-full my-6 rounded">
        <div class="flex flex-wrap gap-4 mt-4">
            <a href="mailto:dpmptsp@bangkalankab.go.id" class="border border-[#1E90FF] text-[#1E90FF] px-4 py-2 rounded hover:bg-blue-100">dpmptsp@bangkalankab.go.id</a>
            <a href="tel:089980861166" class="bg-[#1E90FF] text-white px-4 py-2 rounded hover:bg-blue-700">089980861166</a>
        </div>
    </div>
</section>

<!-<!-- About MPP Section -->
<section class="py-10 bg-[#1E90FF]">
    <div class="container px-4 mx-auto">
        <h2 class="text-4xl font-bold text-center text-white">TENTANG MPP</h2>
        
        <div class="max-w-3xl p-6 mx-auto mt-6 bg-white rounded-lg">
            <p class="text-center text-[#1E90FF]">
                MPP Bangkalan merupakan salah satu upaya Pemerintah Kabupaten Bangkalan untuk meningkatkan kualitas dan standar pelayanan publik kepada masyarakat.
                MPP Bangkalan telah beroperasi sejak tahun 2020, namun baru tahun 2023 ini dinyatakan layak untuk diresmikan setelah memenuhi kriteria yang ditetapkan oleh Kementerian PANRB.
                MPP Bangkalan menawarkan kemudahan, kecepatan, keterjangkauan, keamanan dan kenyamanan kepada masyarakat dalam mendapatkan pelayanan publik. Saat ini, terdapat 105 jenis produk layanan yang disediakan oleh 13 instansi pemerintah, baik pusat maupun daerah, yang telah bergabung di MPP Bangkalan.
            </p>
        </div>

        <!-- Icons Section -->
        <div class="flex flex-wrap justify-center gap-10 mt-10">
            <div class="w-40 text-center cursor-pointer transition-all duration-300 hover:transform hover:scale-105">
                <div class="flex items-center justify-center w-16 h-16 mx-auto bg-white rounded-full shadow hover:bg-yellow-400 transition-all duration-300 group">
                    <!-- Heroicon: Light Bulb -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.8" stroke="currentColor" class="w-8 h-8 text-[#1E90FF] group-hover:text-white transition-all duration-300">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 18v-5.25m0 0a6.01 6.01 0 0 0 1.5-.189m-1.5.189a6.01 6.01 0 0 1-1.5-.189m3.75 7.478a12.06 12.06 0 0 1-4.5 0m3.75 2.383a14.406 14.406 0 0 1-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 1 0-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                    </svg>
                </div>
                <p class="mt-3 font-bold text-white hover:text-yellow-400 transition-all duration-300">Transparansi Pelayanan</p>
            </div>

            <div class="w-40 text-center cursor-pointer transition-all duration-300 hover:transform hover:scale-105">
                <div class="flex items-center justify-center w-16 h-16 mx-auto bg-white rounded-full shadow hover:bg-yellow-400 transition-all duration-300 group">
                    <!-- Heroicon: Users -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
                        stroke-width="1.8" stroke="currentColor" class="w-8 h-8 text-blue-600 group-hover:text-white transition-all duration-300">
                        <path stroke-linecap="round" stroke-linejoin="round" 
                            d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                    </svg>

                </div>
                <p class="mt-3 font-bold text-white hover:text-yellow-400 transition-all duration-300">Kenyamanan Pelayanan</p>
            </div>

            <div class="w-40 text-center cursor-pointer transition-all duration-300 hover:transform hover:scale-105">
                <div class="flex items-center justify-center w-16 h-16 mx-auto bg-white rounded-full shadow hover:bg-yellow-400 transition-all duration-300 group">
                    <!-- Heroicon: Adjustments / Funnel -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
                        stroke-width="1.8" stroke="currentColor" class="w-8 h-8 text-blue-600 group-hover:text-white transition-all duration-300">
                        <path stroke-linecap="round" stroke-linejoin="round" 
                            d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z" />
                    </svg>
                </div>
                <p class="mt-3 font-bold text-white hover:text-yellow-400 transition-all duration-300">Efisiensi Pelayanan</p>
            </div>
        </div>
    </div>
</section>



@include('components.operational-hours', ['hours' => $hours, 'today' => $today])


<section class="py-10 bg-white">
    <div class="container px-4 mx-auto">
        <h2 class="text-3xl font-bold text-center text-[#1E90FF] mb-10">INSTITUSI LAYANAN</h2>
        <div class="grid grid-cols-2 gap-8 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 justify-items-center">
            @foreach($institutions as $institution)
                <x-institution-card :institution="$institution" />
            @endforeach
        </div>
    </div>
</section>

<!-- Informasi Kegiatan Section -->
<section class="py-10 bg-white">
    <div class="container px-4 mx-auto">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-3xl font-bold text-[#1E90FF]">INFORMASI KEGIATAN</h2>
            <a href="{{ route('informations.index') }}" class="px-4 py-2 text-sm font-bold text-[#1E90FF] border border-[#1E90FF] rounded hover:bg-[#1E90FF] hover:text-white transition-all">LIHAT SEMUA INFORMASI &rarr;</a>
        </div>
        <x-information.information-index :informations="$informations" />
    </div>
</section>

<!-- Agenda Section -->
<section class="py-10 bg-white">
    <div class="container px-4 mx-auto">
        <h2 class="text-3xl font-bold text-[#1E90FF] mb-4">AGENDA KEGIATAN</h2>
        <x-agenda.agenda-index :agendas="$agendas" />
    </div>
</section>

@endsection
