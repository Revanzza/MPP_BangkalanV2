@props(['layanan', 'loop' => null])

<div x-data="{ open: false }" class="mb-1">
    <button @click="open = !open"
        class="w-full flex justify-between items-center bg-[#0099ff] text-white px-8 py-2 rounded-lg font-bold  text-lg shadow transition-all duration-200 border border-white hover:bg-[#007acc] focus:outline-none">
        <span class="flex items-center gap-4">
            <span class="text-lg font-bold">{{ $loop ? $loop->iteration : '' }}.</span>
            <span class="uppercase">{{ $layanan->nama_layanan }}</span>
        </span>
        <span class="flex items-center justify-center w-8 h-8 bg-white rounded-full text-[#0099ff]">
            <svg class="w-6 h-6 transition-transform" :class="{'rotate-90': open}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </span>
    </button>
    <div x-show="open" x-transition class="p-6 text-gray-800 border border-t-0 rounded-b-lg bg-gray-50">
        <h2 class="mb-2 text-lg font-bold">Persyaratan :</h2>
        <ol class="pl-6 mb-4 list-decimal">
            @foreach($layanan->persyaratan as $item)
                {!! modifyContent( $item->deskripsi_persyaratan ) !!}
            @endforeach
        </ol>
        <h2 class="mb-2 text-lg font-bold">Mekanisme :</h2>
        <ol class="pl-6 list-decimal">
            @foreach($layanan->mekanisme as $item)
                {!! modifyContent( $item->deskripsi_mekanisme ) !!}
            @endforeach
        </ol>
    </div>
</div>
