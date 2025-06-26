<!-- resources/views/components/agenda-index.blade.php -->
<div class="container px-4 py-10 mx-auto">

    <div class="space-y-6">
        @forelse ($agendas as $agenda)
        <div class="overflow-hidden transition-transform duration-300 bg-white rounded-lg shadow hover:shadow-md hover:-translate-y-1">
            <div class="md:flex">
                <div class="md:w-1/3">
                    <a href="{{ route('agenda.show', $agenda->slug) }}">
                        <img src="{{ $agenda->foto_agenda ? asset('storage/' . $agenda->foto_agenda) : asset('images/default.jpg') }}"
                             alt="{{ $agenda->nama_agenda }}"
                             class="object-cover w-full h-52">
                    </a>
                </div>
                <div class="flex flex-col justify-between p-5 md:w-2/3">
                    <div>
                        <p class="flex items-center gap-4 mb-2 text-sm text-gray-500">
                            <div class="flex items-center space-x-3 text-sm text-gray-500">
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
                        <div class="mt-2 text-sm text-gray-600 line-clamp-2">
                            {!! modifyContent($agenda->deskripsi) !!}
                        </div>
                    </div>
                    <div class="mt-4 text-right">
                        <a href="{{ route('agenda.show', $agenda->slug) }}" class="inline-flex items-center px-4 py-2 text-sm text-blue-800 transition border border-blue-800 rounded hover:bg-blue-800 hover:text-white">
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

        {{-- Pagination --}}
        <div class="flex justify-center mt-8">
            {{ $agendas->links('vendor.pagination.tailwind') }}
        </div>
    </div>

</div>
