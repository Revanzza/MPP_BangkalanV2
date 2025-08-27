@extends('layouts.app')

@section('content')
<div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md p-8 text-center bg-white rounded shadow">
        <h1 class="text-2xl font-bold text-[#1E90FF] mb-4">Antrean Online Tidak Tersedia</h1>
        <p class="mb-4 text-lg text-gray-700">Fitur antrean online sedang dinonaktifkan oleh admin.</p>
        <p class="mb-4 text-gray-600 text-md">Silakan datang ke Mall Pelayanan Publik untuk mengambil nomor antrean di mesin antrean.</p>
        <a href="/" class="px-6 py-2 bg-[#1E90FF] text-white rounded hover:bg-[#007acc]">Kembali ke Beranda</a>
    </div>
</div>
@endsection
