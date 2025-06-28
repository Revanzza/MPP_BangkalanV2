@php($institution = $institution ?? null)
@if($institution)
<div class="flex flex-col items-center p-6 transition-all duration-300 bg-yellow-400 border border-gray-200 rounded-lg shadow group hover:-translate-y-1 hover:shadow-lg">
    <div class="flex items-center justify-center w-full h-32 mb-4">
        <img src="{{ asset('storage/' . $institution->logo_institution) }}" alt="{{ $institution->nama_institution }}" class="object-contain mx-auto max-h-28">
    </div>
    <div class="flex flex-col justify-between flex-1 w-full">
        <p class="text-center text-sm text-gray-800 font-semibold mb-4 min-h-[40px] line-clamp-2">{{ $institution->nama_institution }}</p>
        <a href="{{ route('services.instansi', ['slug' => $institution->slug]) }}" class="inline-block px-3 py-2 text-sm text-[#1E90FF] transition-all duration-300 border border-[#1E90FF] rounded hover:bg-[#1E90FF] hover:text-white">
            Baca Selengkapnya
        </a>
    </div>
</div>
@endif
