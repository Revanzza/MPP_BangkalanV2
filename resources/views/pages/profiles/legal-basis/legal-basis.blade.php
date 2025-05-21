@extends('layouts.app')

@section('content')
<div class="w-full p-0">
    <!-- Header Section -->
    <div class="relative bg-blue-600 text-white overflow-hidden h-[280px]">
        <!-- Dot Pattern Overlay -->
        <div class="absolute inset-0 h-full w-full end-0 top-0">
            <img src="{{ asset('images/efek.png') }}" 
                 alt="Pattern" 
                 class="w-full h-full object-cover opacity-20">
        </div>

        <!-- Content Container -->
        <div class="relative h-full flex items-center container mx-auto px-4">
            <div class="pb-8">
                <h1 class="text-white font-bold text-4xl sm:text-5xl mb-3 tracking-tight">DASAR HUKUM</h1>
                <p class="uppercase mb-4 text-lg sm:text-xl text-white tracking-wider">MAL PELAYANAN PUBLIK KABUPATEN BANGKALAN</p>
                <div class="inline-block">
                    <a href="{{ route('home') }}" class="transition hover:opacity-90">
                        <span class="bg-white text-blue-600 flex items-center gap-2 text-sm font-medium px-4 py-2 rounded">
                            <i class="bi bi-house-fill text-blue-600"></i>
                            <span>Beranda</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>        
    </div>

    <!-- Description Section -->
    <div class="container mx-auto my-12 px-4">
        <div class="flex justify-center">
            <div class="w-full max-w-4xl">
                <p class="text-center text-blue-600 mb-10 text-xl leading-relaxed">
                    "Dasar hukum berkaitan mengenai landasan dalam penyelenggaraan Mal Pelayanan Publik (MPP), menerangkan bahwa setiap layanan yang diberikan sesuai dengan peraturan perundang-undangan yang berlaku. Regulasi ini dirancang untuk menjamin hak-hak secara transparan, efisien, dan kebutuhan akan akses bagi masyarakat dalam mempercepat pelayanan publik"
                </p>
            </div>
        </div>
    </div>

    <!-- Legal Basis Section -->
    <div class="container mx-auto mb-12 px-4">
        <div class="flex justify-center">
            <div class="w-full max-w-4xl">
                <div class="bg-blue-600 text-white rounded-lg shadow-lg p-6 sm:p-8">
                    <h2 class="text-2xl sm:text-3xl font-bold mb-6">MENIMBANG</h2>
                    <p class="mb-10 leading-relaxed">
                        Bahwa sehubungan dengan ditetapkannya Kabupaten Bangkalan sebagai salah satu Kabupaten Penyelenggara Mal Pelayanan Publik berdasarkan Keputusan Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Nomor 11 Tahun 2018 tentang Penetapan Lokasi Penyelenggaraan Mal Pelayanan Publik Tahun 2018, serta dalam rangka tertib administrasi Penyelenggaraan Mal Pelayanan Publik;
                    </p>

                    <h2 class="text-2xl sm:text-3xl font-bold mb-6">MENGINGAT</h2>
                    <ol class="list-decimal pl-6 space-y-4 text-white">
                        <li>Undang-Undang Nomor 25 Tahun 2009 tentang Pelayanan Publik;</li>
                        <li>Undang-Undang Nomor 23 Tahun 2014 tentang Pemerintah Daerah sebagaimana telah diubah terakhir dengan Undang - Undang Nomor 9 Tahun 2015 tentang Perubahan Kedua Atas Undang - Undang Nomor 23 Tahun 2014 Tentang Pemerintahan Daerah;</li>
                        <li>Peraturan Pemerintah Nomor 58 Tahun 2005 tentang Pengelolaan Keuangan Daerah;</li>
                        <li>Peraturan Pemerintah Nomor 96 Tahun 2012 tentang Pelaksanaan Undang-Undang Nomor 25 Tahun 2009 tentang Pelayanan Publik;</li>
                        <li>Peraturan Pemerintah Nomor 18 Tahun 2016 tentang Perangkat Daerah;</li>
                        <li>Peraturan Presiden Nomor 97 Tahun 2014 tentang Penyelenggaraan Pelayanan Terpadu Satu Pintu;</li>
                        <li>Peraturan Menteri Dalam Negeri Nomor 13 Tahun 2006 tentang Pedoman Pengelolaan Keuangan Daerah sebagaimana telah diubah terakhir dengan Peraturan Menteri Dalam Negeri Nomor 21 Tahun 2011;</li>
                        <li>Peraturan Menteri Pendayagunaan Aparatur Negara Dan Reformasi Birokrasi Republik Indonesia Nomor 23 Tahun 2017 Tentang Penyelenggaraan Mal Pelayanan Publik;</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
