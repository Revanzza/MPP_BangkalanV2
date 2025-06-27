<section class="py-10">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold text-[#1E90FF]">JAM OPERASIONAL</h2>
        <p class="text-gray-600">Jam operasional dapat berubah sewaktu-waktu</p>

        <div class="flex flex-col md:flex-row items-center mt-6">
            <!-- Gambar -->
            <div class="md:w-1/2">
                <img src="{{ asset('images/pageJamOperasional.png') }}" alt="Ilustrasi Jam Operasional" class="w-full">
            </div>

            <!-- Jam -->
            <div class="md:w-1/2 flex flex-wrap justify-center gap-4 mt-6 md:mt-0">
                @foreach ($hours as $hour)
                    <div class="w-48 p-4 rounded shadow transition-all duration-300 ease-in-out
                        {{ 
                            strtolower($hour->day) === strtolower($today) && $hour->is_closed == 0 ? 'bg-red-600 text-white' : (
                            strtolower($hour->day) === strtolower($today) ? 'bg-[#1E90FF] text-white' : (
                            $hour->is_closed == 0 ? 'border border-red-500 text-red-500 bg-white' : 'bg-white hover:bg-blue-100'
                            ))
                        }}
                    ">
                        <div class="flex items-center gap-2 justify-center">
                            <x-heroicon-o-clock class="w-5 h-5" />
                            <span>{{ $hour->day }}</span>
                        </div>
                        <p class="mt-2">
                            @if ($hour->is_closed == 0)
                                Tidak Beroperasional
                            @else
                                {{ $hour->open_time }} - {{ $hour->close_time }}
                            @endif
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
