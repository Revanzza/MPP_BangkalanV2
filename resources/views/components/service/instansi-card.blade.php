<div class="flex flex-col items-center p-6 transition-all duration-300 bg-yellow-400 border border-gray-200 rounded-lg shadow group hover:-translate-y-1 hover:shadow-lg">
    <div class="flex items-center justify-center w-full h-32 mb-4">
        <img src="{{ asset('storage/logo/' . $logo) }}" alt="{{ $nama }}" class="object-contain mx-auto max-h-28">
    </div>
    <div class="flex flex-col justify-between flex-1 w-full">
        <p class="text-center text-sm text-gray-800 font-semibold mb-4 min-h-[40px] line-clamp-2">{{ $nama }}</p>
        <a href="{{ route('services.show', ['slug' => $slug]) }}" class="inline-block px-3 py-2 text-sm text-blue-600 transition-all duration-300 border border-blue-600 rounded hover:bg-blue-600 hover:text-white">
            Baca Selengkapnya
        </a>
    </div>
</div>