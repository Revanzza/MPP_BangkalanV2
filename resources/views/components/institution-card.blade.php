@props(['institution'])
<a href="{{ route('services.instansi', $institution->slug) }}" class="flex flex-col items-center transition-transform duration-200 cursor-pointer group hover:scale-105">
    <div class="flex items-center justify-center mb-1 overflow-hidden bg-white rounded-full w-24 h-24">
        @if($institution->logo_institution)
            <img src="{{ asset('storage/' . $institution->logo_institution) }}" alt="{{ $institution->nama_institution }}" class="object-contain w-20 h-20">
        @else
            <div class="flex items-center justify-center w-20 h-20 bg-gray-100 text-gray-400 rounded-full">
                <span class="text-xs">No Logo</span>
            </div>
        @endif
    </div>
    <div class="text-center text-base font-semibold text-gray-700 group-hover:text-[#1E90FF]">
        {{ $institution->nama_institution }}
    </div>
</a>
