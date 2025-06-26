<!-- Information List Section -->
<div class="container py-8 mx-auto">
    <h2 class="mb-6 font-bold text-2xl text-[#0056b3]">INFORMASI TERBARU</h2>
    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($informations as $info)
        <div class="flex flex-col transition-transform duration-300 bg-white rounded-lg shadow hover:-translate-y-1">
            <a href="{{ route('informations.show', $info->slug) }}">
                <img src="{{ asset('storage/' . $info->foto_information) }}" alt="{{ $info->judul }}" class="object-cover w-full h-48 rounded-t-lg">
            </a>
            <div class="flex flex-col flex-1 p-4">
                <p class="flex items-center gap-2 mb-2 text-sm text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="inline w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    {{ \Carbon\Carbon::parse($info->created_at)->format('d F Y') }}
                    <span class="mx-2">—</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="inline w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V10a2 2 0 012-2h2m2-4h4a2 2 0 012 2v4H7V6a2 2 0 012-2z"/></svg>
                    {{ $info->kategori ?? 'Informasi Diskominfo' }}
                </p>
                <a href="{{ route('informations.show', $info->slug) }}" class="no-underline hover:underline">
                    <h3 class="font-bold text-lg text-[#0056b3] mb-2">
                        {{ $info->judul }}
                    </h3>
                </a>
                <p class="mb-4 overflow-hidden text-sm text-gray-600 line-clamp-3">
                    {!! \Illuminate\Support\Str::limit(strip_tags($info->isi), 150) !!}
                </p>
                <div class="flex items-center gap-2 mt-auto">
                    <img src="{{ asset('images/mpp-bangkalan.png') }}" alt="Logo MPP" class="w-8 h-8">
                    <span class="text-xs font-semibold text-[#0056b3]">MAL PELAYANAN PUBLIK KABUPATEN BANGKALAN</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="flex justify-center mt-8">
        {{ $informations->links() }}
    </div>

</div>