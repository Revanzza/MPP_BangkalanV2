@extends('layouts.app')

@section('content')
<!-- Information Detail Section -->
<div class="w-full">
    <!-- Banner Section -->
    <div class="relative">
        <img src="{{ asset('images/berita2.jpg') }}" alt="Agenda Banner" class="w-full h-[400px] object-cover">
        <div class="absolute flex flex-col items-center max-w-xl p-6 -translate-x-1/2 -translate-y-1/2 rounded-lg shadow-lg top-1/2 left-1/2 bg-white/90">
            <h1 class="font-bold text-2xl md:text-3xl text-[#0056b3] text-center">{{ $information->judul }}</h1>
            <p class="mt-2 text-center text-gray-600">{{ $information->kategori ?? 'Mal Pelayanan Publik Kabupaten Bangkalan' }}</p>
            <div class="flex items-center justify-center gap-4 mt-3 text-sm text-gray-700">
                <span class="flex items-center gap-1">
                    <i class="bi bi-calendar-event"></i>
                    {{ \Carbon\Carbon::parse($information->created_at)->translatedFormat('d F Y') }}
                </span>
                <span>|</span>
                <span class="flex items-center gap-1">
                    <i class="bi bi-person"></i>
                    {{ $information->user->name ?? 'Admin' }}
                </span>
            </div>
            <a href="{{ route('informations.index') }}" class="mt-4 inline-block px-6 py-2 rounded bg-[#0056b3] text-white font-semibold shadow hover:bg-blue-800 transition">Semua Informasi</a>
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
                        @if($information->foto_information)
                            <img src="{{ asset('storage/' . $information->foto_information) }}" alt="Foto Informasi" class="object-contain w-full mb-4 rounded shadow">
                            <h2 class="mt-2 mb-4 text-xl font-bold text-[#17191c]">{{ $information->judul }}</h2>
                        @endif
                        {!! modifyContent($information->isi) !!}
                    </div>
                </div>
            </div>

            <!-- Right Sidebar -->
            <div class="flex flex-col w-full gap-6 lg:w-1/3">
                <!-- Social Media Links -->
                <div class="p-4 bg-white rounded-lg shadow">
                    @php
                        $url = urlencode(request()->fullUrl());
                        $title = urlencode($information->judul);
                    @endphp
                    <h6 class="font-bold mb-3 text-center text-[#0056b3]">Bagikan:</h6>
                    <div class="flex justify-center gap-4 text-2xl text-gray-600">
                        <!-- Facebook -->
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ $url }}" target="_blank" rel="noopener" class="hover:text-blue-600" aria-label="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M22 12c0-5.522-4.477-10-10-10S2 6.478 2 12c0 4.991 3.657 9.128 8.438 9.877v-6.987h-2.54v-2.89h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.632.771-1.632 1.562v1.875h2.773l-.443 2.89h-2.33v6.987C18.343 21.128 22 16.991 22 12"/>
                            </svg>
                        </a>
                        <!-- Twitter -->
                        <a href="https://twitter.com/intent/tweet?url={{ $url }}&text={{ $title }}" target="_blank" rel="noopener" class="hover:text-sky-400" aria-label="Twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M22.46 5.924c-.793.352-1.645.59-2.54.698a4.48 4.48 0 001.963-2.475 8.94 8.94 0 01-2.828 1.082A4.48 4.48 0 0016.11 4c-2.485 0-4.5 2.015-4.5 4.5 0 .353.04.697.116 1.027C7.728 9.39 4.1 7.67 1.671 5.149c-.388.666-.61 1.44-.61 2.267 0 1.565.797 2.946 2.01 3.756a4.48 4.48 0 01-2.037-.563v.057c0 2.188 1.556 4.016 3.623 4.433a4.52 4.52 0 01-2.03.077c.573 1.79 2.236 3.09 4.206 3.126A9.01 9.01 0 012 19.54a12.73 12.73 0 006.92 2.03c8.302 0 12.846-6.876 12.846-12.846 0-.196-.004-.392-.013-.586A9.18 9.18 0 0024 4.59a8.97 8.97 0 01-2.54.698z"/>
                            </svg>
                        </a>
                        <!-- Instagram -->
                        <a href="https://instagram.com/" target="_blank" rel="noopener" class="hover:text-pink-500" aria-label="Instagram">
                            <svg role="img" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg">
                                <title>Instagram</title>
                                <path d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"/>
                            </svg>
                        </a>
                        <!-- LinkedIn -->
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $url }}" target="_blank" rel="noopener" class="hover:text-blue-700" aria-label="LinkedIn">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 19h-3v-10h3v10zm-1.5-11.268c-.966 0-1.75-.784-1.75-1.75s.784-1.75 1.75-1.75 1.75.784 1.75 1.75-.784 1.75-1.75 1.75zm13.5 11.268h-3v-5.604c0-1.337-.025-3.063-1.867-3.063-1.868 0-2.154 1.459-2.154 2.968v5.699h-3v-10h2.881v1.367h.041c.401-.761 1.379-1.563 2.841-1.563 3.039 0 3.6 2.001 3.6 4.599v5.597z"/>
                            </svg>
                        </a>
                        <!-- WhatsApp -->
                        <a href="https://wa.me/?text={{ $title }}%20{{ $url }}" target="_blank" rel="noopener" class="hover:text-green-500" aria-label="WhatsApp">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M20.52 3.48A11.93 11.93 0 0012 0C5.37 0 0 5.37 0 12c0 2.11.55 4.16 1.6 5.97L0 24l6.26-1.64A11.94 11.94 0 0012 24c6.63 0 12-5.37 12-12 0-3.19-1.24-6.19-3.48-8.52zM12 22c-1.85 0-3.63-.5-5.18-1.44l-.37-.22-3.7.97.99-3.6-.24-.38A9.94 9.94 0 012 12c0-5.52 4.48-10 10-10s10 4.48 10 10-4.48 10-10 10zm5.2-7.8c-.28-.14-1.65-.81-1.9-.9-.25-.09-.43-.14-.61.14-.18.28-.7.9-.86 1.08-.16.18-.32.2-.6.07-.28-.14-1.18-.44-2.25-1.4-.83-.74-1.39-1.65-1.55-1.93-.16-.28-.02-.43.12-.57.13-.13.28-.34.42-.51.14-.17.18-.29.28-.48.09-.19.05-.36-.02-.5-.07-.14-.61-1.47-.84-2.01-.22-.53-.45-.46-.61-.47-.16-.01-.35-.01-.54-.01s-.5.07-.76.34c-.26.27-1 1.01-1 2.46 0 1.45 1.03 2.85 1.18 3.05.15.2 2.03 3.1 4.93 4.22.69.3 1.23.48 1.65.61.69.22 1.32.19 1.81.12.55-.08 1.65-.67 1.89-1.32.23-.65.23-1.21.16-1.32-.07-.11-.25-.18-.53-.32z"/>
                            </svg>
                        </a>
                        <!-- Share -->
                        <a href="#" onclick="navigator.clipboard.writeText('{{ request()->fullUrl() }}'); return false;" class="hover:text-gray-800" aria-label="Share">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Related Informations -->
                <div class="p-4 bg-white rounded-lg shadow">
                    <h6 class="font-bold mb-3 text-[#0056b3]">Informasi Lainnya</h6>
                    <div class="flex flex-col gap-3">
                        @forelse ($relatedInformations as $item)
                        <div class="flex overflow-hidden rounded shadow-sm bg-gray-50">
                            <img src="{{ $item->foto_information ? asset('storage/' . $item->foto_information) : asset('images/default.jpg') }}" class="object-cover w-20 h-20" alt="Information Thumbnail">
                            <div class="flex flex-col justify-center px-3 py-2">
                                <p class="mb-1 text-sm font-semibold line-clamp-2">{{ $item->judul }}</p>
                                <a href="{{ route('informations.show', $item->slug) }}" class="flex items-center gap-1 text-xs font-semibold text-blue-700 hover:underline">
                                    Selengkapnya <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        @empty
                        <p class="text-sm text-gray-500">Tidak ada informasi lain.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection