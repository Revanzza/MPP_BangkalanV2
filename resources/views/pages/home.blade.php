@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="bg-gray-100 py-10">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold">SELAMAT DATANG</h1>
        <h2 class="text-2xl text-gray-600">DI MAL PELAYANAN PUBLIK</h2>
        <div class="inline-block bg-blue-600 text-white px-4 py-1 mt-4 rounded">
            <p class="mb-0">Kabupaten Bangkalan</p>
        </div>
        <p class="text-gray-600 mt-4">
            Bangkalan Plaza Lt. 3, Jl. Halim Perdana Kusuma, Area Sawah, Mlajah, Kec. Bangkalan, Kabupaten Bangkalan, Jawa Timur 69116
        </p>
        <img src="{{ asset('images/mpp-building.jpg') }}" alt="MPP Building" class="w-full my-6 rounded">
        <div class="flex flex-wrap gap-4 mt-4">
            <a href="mailto:dpmptsp@bangkalankab.go.id" class="border border-blue-600 text-blue-600 px-4 py-2 rounded hover:bg-blue-100">dpmptsp@bangkalankab.go.id</a>
            <a href="tel:089980861166" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">089980861166</a>
        </div>
    </div>
</section>

<!-<!-- About MPP Section -->
<section class="py-10 bg-blue-600">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-white">TENTANG MPP</h2>
        
        <div class="bg-white p-6 rounded-lg mt-6 max-w-3xl mx-auto">
            <p class="text-center text-blue-600">
                MPP Bangkalan merupakan salah satu upaya Pemerintah Kabupaten Bangkalan untuk meningkatkan kualitas dan standar pelayanan publik kepada masyarakat.
                MPP Bangkalan telah beroperasi sejak tahun 2020, namun baru tahun 2023 ini dinyatakan layak untuk diresmikan setelah memenuhi kriteria yang ditetapkan oleh Kementerian PANRB.
                MPP Bangkalan menawarkan kemudahan, kecepatan, keterjangkauan, keamanan dan kenyamanan kepada masyarakat dalam mendapatkan pelayanan publik. Saat ini, terdapat 105 jenis produk layanan yang disediakan oleh 13 instansi pemerintah, baik pusat maupun daerah, yang telah bergabung di MPP Bangkalan.
            </p>
        </div>

        <!-- Icons Section -->
        <div class="flex flex-wrap justify-center gap-10 mt-10">
            <div class="text-center w-40">
                <div class="bg-white rounded-full w-16 h-16 flex items-center justify-center shadow mx-auto">
                    <!-- Heroicon: Light Bulb -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.8" stroke="currentColor" class="w-8 h-8 text-blue-600">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 18v-5.25m0 0a6.01 6.01 0 0 0 1.5-.189m-1.5.189a6.01 6.01 0 0 1-1.5-.189m3.75 7.478a12.06 12.06 0 0 1-4.5 0m3.75 2.383a14.406 14.406 0 0 1-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 1 0-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                    </svg>
                </div>
                <p class="text-white font-bold mt-3">Transparansi Pelayanan</p>
            </div>

            <div class="text-center w-40">
                <div class="bg-white rounded-full w-16 h-16 flex items-center justify-center shadow mx-auto">
                    <!-- Heroicon: Users -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
                        stroke-width="1.8" stroke="currentColor" class="w-8 h-8 text-blue-600">
                        <path stroke-linecap="round" stroke-linejoin="round" 
                            d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                    </svg>

                </div>
                <p class="text-white font-bold mt-3">Kenyamanan Pelayanan</p>
            </div>

            <div class="text-center w-40">
                <div class="bg-white rounded-full w-16 h-16 flex items-center justify-center shadow mx-auto">
                    <!-- Heroicon: Adjustments / Funnel -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
                        stroke-width="1.8" stroke="currentColor" class="w-8 h-8 text-blue-600">
                        <path stroke-linecap="round" stroke-linejoin="round" 
                            d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z" />
                    </svg>
                </div>
                <p class="text-white font-bold mt-3">Efisiensi Pelayanan</p>
            </div>
        </div>
    </div>
</section>


<!-- Operating Hours Section -->
<section class="py-10">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-blue-800">JAM OPERASIONAL</h2>
        <p class="text-gray-600">Jam Operasional tersebut bisa berubah kapanpun</p>
        <div class="flex flex-col md:flex-row items-center mt-6">
            <!-- Image -->
            <div class="md:w-1/2">
                <img src="{{ asset('storage/banners/pageJamOperasional.png') }}" alt="Operating Hours Illustration" class="w-full">
            </div>
            <!-- Hours -->
            <div class="md:w-1/2 flex flex-wrap justify-center gap-4 mt-6 md:mt-0">
                <div class="w-48 p-4 bg-white rounded shadow operating-hours-card">
                    <div class="flex items-center gap-2">
                        <i class="bi bi-clock"></i><span>Senin</span>
                    </div>
                    <p class="mb-0">08:00 - 16:00</p>
                </div>
                <div class="w-48 p-4 bg-white rounded shadow operating-hours-card">
                    <div class="flex items-center gap-2">
                        <i class="bi bi-clock"></i><span>Selasa</span>
                    </div>
                    <p class="mb-0">08:00 - 16:00</p>
                </div>
                <div class="w-48 p-4 bg-white rounded shadow operating-hours-card">
                    <div class="flex items-center gap-2">
                        <i class="bi bi-clock"></i><span>Rabu</span>
                    </div>
                    <p class="mb-0">08:00 - 16:00</p>
                </div>
                <div class="w-48 p-4 bg-white rounded shadow operating-hours-card">
                    <div class="flex items-center gap-2">
                        <i class="bi bi-clock"></i><span>Kamis</span>
                    </div>
                    <p class="mb-0">08:00 - 16:00</p>
                </div>
                <div class="w-48 p-4 bg-white rounded shadow operating-hours-card">
                    <div class="flex items-center gap-2">
                        <i class="bi bi-clock"></i><span>Jumat</span>
                    </div>
                    <p class="mb-0">08:00 - 16:00</p>
                </div>
                <div class="w-48 p-4 bg-white rounded shadow border border-red-500">
                    <div class="flex items-center gap-2 text-red-500">
                        <i class="bi bi-clock"></i><span>Sabtu</span>
                    </div>
                    <p class="text-red-500">Tidak Beroperasional</p>
                </div>
                <div class="w-48 p-4 bg-white rounded shadow border border-red-500">
                    <div class="flex items-center gap-2 text-red-500">
                        <i class="bi bi-clock"></i><span>Minggu</span>
                    </div>
                    <p class="text-red-500">Tidak Beroperasional</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.clickable-icon').forEach(icon => {
            icon.addEventListener('click', function () {
                document.querySelectorAll('.clickable-icon').forEach(i => i.classList.remove('bg-yellow-400'));
                this.classList.add('bg-yellow-400');
            });
        });

        document.querySelectorAll('.operating-hours-card').forEach(card => {
            card.addEventListener('click', function () {
                document.querySelectorAll('.operating-hours-card').forEach(c => c.classList.remove('bg-blue-800', 'text-white'));
                this.classList.add('bg-blue-800', 'text-white');
            });
        });
    });
</script>

@endsection
