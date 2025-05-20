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

<!-- About MPP Section -->
<section class="py-10 bg-blue-800">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-white">TENTANG MPP</h2>
        <div class="bg-white p-6 rounded-lg mt-6">
            <p class="text-center text-blue-800">
                MPP Bangkalan merupakan salah satu upaya Pemerintah Kabupaten Bangkalan untuk meningkatkan kualitas dan standar pelayanan publik kepada masyarakat.
                MPP Bangkalan telah beroperasi sejak tahun 2020, namun baru tahun 2023 ini dinyatakan layak untuk diresmikan setelah memenuhi kriteria yang ditetapkan oleh Kementerian PANRB.
                MPP Bangkalan menawarkan kemudahan, kecepatan, keterjangkauan, keamanan dan kenyamanan kepada masyarakat dalam mendapatkan pelayanan publik. Saat ini, terdapat 105 jenis produk layanan yang disediakan oleh 13 instansi pemerintah, baik pusat maupun daerah, yang telah bergabung di MPP Bangkalan.
            </p>
        </div>
        <div class="flex justify-center gap-8 mt-10">
            <div class="text-center">
                <div class="bg-white rounded-full w-16 h-16 flex items-center justify-center shadow clickable-icon" data-icon="1">
                    <i class="bi bi-lightbulb-fill text-blue-800 text-xl"></i>
                </div>
                <p class="text-white font-bold mt-2">Transparansi Pelayanan</p>
            </div>
            <div class="text-center">
                <div class="bg-white rounded-full w-16 h-16 flex items-center justify-center shadow clickable-icon" data-icon="2">
                    <i class="bi bi-people-fill text-blue-800 text-xl"></i>
                </div>
                <p class="text-white font-bold mt-2">Kenyamanan Pelayanan</p>
            </div>
            <div class="text-center">
                <div class="bg-white rounded-full w-16 h-16 flex items-center justify-center shadow clickable-icon" data-icon="3">
                    <i class="bi bi-funnel-fill text-blue-800 text-xl"></i>
                </div>
                <p class="text-white font-bold mt-2">Efisiensi Pelayanan</p>
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
