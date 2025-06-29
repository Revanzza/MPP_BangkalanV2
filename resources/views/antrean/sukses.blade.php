@extends('layouts.app')

@section('content')
<div class="flex flex-col items-center justify-center min-h-screen space-y-6 bg-gray-100">
    <div class="w-full max-w-md p-8 text-center bg-white rounded shadow">
        <h2 class="text-xl font-bold text-[#1E90FF] mb-2">Nomor antrean yang sedang dilayani</h2>
        @if($sedang_dilayani)
            <div class="text-3xl font-extrabold text-[#1E90FF] mb-2">{{ $sedang_dilayani->nomer_antrean }}</div>
        @else
            <div class="mb-2 text-lg text-gray-500">Belum ada antrean yang sedang dilayani.</div>
        @endif
    </div>
    <div class="w-full max-w-md p-8 text-center bg-white rounded shadow">
        <h1 class="text-2xl font-bold text-[#1E90FF] mb-4">Pendaftaran Berhasil!</h1>
        <p class="mb-2 text-lg">Nomor antrean Anda:</p>
        <div class="text-4xl font-extrabold text-[#1E90FF] mb-6">{{ $nomor }}</div>
        <p class="mb-4 text-sm text-gray-600 italic">*Nb: ScreenShoot Nomer Antrian Anda Sebagai Bukti</p>
        <a href="/" class="px-6 py-2 bg-[#1E90FF] text-white rounded hover:bg-[#007acc]">Kembali ke Beranda</a>
    </div>
</div>
@endsection
