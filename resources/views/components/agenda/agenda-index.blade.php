<!-- resources/views/components/agenda-index.blade.php -->
<div class="container mx-auto py-10 px-4">

    <div class="space-y-6">
        @forelse ($agendas as $agenda)
        <div class="bg-white rounded-lg shadow hover:shadow-md transition-transform duration-300 hover:-translate-y-1 overflow-hidden">
            <div class="md:flex">
                <div class="md:w-1/3">
                    <a href="{{ route('agenda.show', $agenda->slug) }}">
                        <img src="{{ $agenda->foto_agenda ? asset('storage/' . $agenda->foto_agenda) : asset('images/default.jpg') }}"
                             alt="{{ $agenda->nama_agenda }}"
                             class="w-full h-52 object-cover">
                    </a>
                </div>
                <div class="md:w-2/3 p-5 flex flex-col justify-between">
                    <div>
                        <p class="text-sm text-gray-500 mb-2 flex items-center gap-4">
                            <div class="flex items-center text-sm text-gray-500 space-x-3">
                                <!-- Kalender + Tanggal -->
                                <div class="flex items-center space-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                                    </svg>
                                    <span class="font-semibold text-gray-700">
                                        {{ \Carbon\Carbon::parse($agenda->waktu_pelaksanaan)->translatedFormat('d F Y') }}
                                    </span>
                                </div>

                                <!-- Garis Pemisah -->
                                <span class="text-gray-400">—</span>

                                <!-- Lokasi -->
                                <div class="flex items-center space-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                    </svg>

                                    <span class="font-semibold text-gray-700">{{ $agenda->tempat }}</span>
                                </div>
                            </div>

                        </p>
                        <a href="{{ route('agenda.show', $agenda->slug) }}" class="text-lg font-semibold text-blue-800 hover:underline">
                            {{ $agenda->nama_agenda }}
                        </a>
                        <p class="text-gray-600 text-sm mt-2 line-clamp-2">
                            {!! $agenda->deskripsi !!}
                        </p>
                    </div>
                    <div class="text-right mt-4">
                        <a href="{{ route('agenda.show', $agenda->slug) }}" class="inline-flex items-center text-sm border border-blue-800 text-blue-800 px-4 py-2 rounded hover:bg-blue-800 hover:text-white transition">
                            Learn More
                            <!-- Arrow Right Icon -->
                            <svg class="w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <p class="text-gray-600">Belum ada agenda tersedia.</p>
        @endforelse
    </div>

    @if ($agendas->count())
    <div class="text-center mt-8">
        <a href="{{ route('agenda.index') }}" class="inline-flex items-center border border-blue-800 text-blue-800 px-5 py-2 rounded hover:bg-blue-800 hover:text-white transition">
            View More
            <svg class="w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7" />
            </svg>
        </a>
    </div>
    @endif
</div>
