<nav class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <a href="#" class="flex items-center">
                <img src="{{ asset('images/mpp-bangkalan.png') }}" alt="Logo" class="h-12 mr-3">
                <div>
                    <strong class="block leading-tight">MAL PELAYANAN PUBLIK</strong>
                    <span class="text-sm">Kabupaten Bangkalan</span>
                </div>
            </a>

            <!-- Mobile Button -->
            <div class="md:hidden">
                <button @click="open = !open" class="text-gray-700 focus:outline-none" id="navToggleBtn">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>

            <!-- Navigation Items -->
            <ul class="hidden md:flex space-x-6 font-semibold items-center">
                <li>
                    <a href="{{ route('home') }}"
                       class="{{ Request::is('/') ? 'text-blue-600' : 'text-gray-700' }} hover:text-blue-600 transition">
                        BERANDA
                    </a>
                </li>
                <!-- Dropdown Menu -->
                <li class="relative" x-data="{ open: false }">
    <button @click="open = !open" class="flex items-center text-gray-700 hover:text-blue-600 transition">
        PROFIL
        <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
                  d="M5.23 7.21a.75.75 0 011.06.02L10 11.584l3.71-4.354a.75.75 0 111.14.976l-4.25 5a.75.75 0 01-1.14 0l-4.25-5a.75.75 0 01.02-1.06z"
                  clip-rule="evenodd"/>
        </svg>
    </button>
    <ul
        x-show="open"
        @click.away="open = false"
        x-transition
        class="absolute bg-white border rounded shadow-lg mt-2 w-56 z-50 text-left"
        style="display: none;">
        <li><a href="{{ route('profile.vision-mission') }}"
               class="block px-4 py-2 hover:bg-gray-100 {{ Request::is('profil/visi-misi') ? 'text-blue-600 font-semibold' : '' }}">Visi & Misi</a></li>
        <li><a href="{{ route('profile.tugas-fungsi') }}"
                class="block px-4 py-2 hover:bg-gray-100 {{ Request::is('profil/tugas-fungsi') ? 'text-blue-600 font-semibold' : '' }}">Tugas & Fungsi</a></li>
        <li><a href="{{ route('profile.leadership') }}"
                class="block px-4 py-2 hover:bg-gray-100 {{ Request::is('profil/leadership') ? 'text-blue-600 font-semibold' : '' }}">Profil Pimpinan</a></li>
        <li><a href="{{ route('profile.facilities') }}"
               class="block px-4 py-2 hover:bg-gray-100 {{ Request::is('profil/fasilitas') ? 'text-blue-600 font-semibold' : '' }}">Sarana & Prasarana</a></li>
        <li><a href="{{ route('profile.prestasi-inovasi') }}"
                class="block px-4 py-2 hover:bg-gray-100 {{ Request::is('profil/prestasi-inovasi') ? 'text-blue-600 font-semibold' : '' }}">Prestasi & Inovasi</a></li>
        <li><a href="{{ route('profile.legal-basis') }}"
               class="block px-4 py-2 hover:bg-gray-100 {{ Request::is('profil/dasar-hukum') ? 'text-blue-600 font-semibold' : '' }}">Dasar Hukum</a></li>
    </ul>
    </li>

                <li>
                    <a href="{{ route('services.index') }}"
                       class="{{ Request::is('layanan*') ? 'text-blue-600' : 'text-gray-700' }} hover:text-blue-600 transition">
                        LAYANAN
                    </a>
                </li>
                <li>
                    <a href="{{ route('informations.index') }}"
                       class="{{ Request::is('informasi*') ? 'text-blue-600' : 'text-gray-700' }} hover:text-blue-600 transition">
                        INFORMASI
                    </a>
                </li>
                <li>
                    <a href="{{ route('agenda.index') }}"
                       class="{{ Request::is('agenda*') ? 'text-blue-600' : 'text-gray-700' }} hover:text-blue-600 transition">
                        AGENDA
                    </a>
                </li>
            </ul>
        </div>

        <!-- Mobile Nav -->
        <div class="md:hidden hidden" id="mobileNav">
            <ul class="mt-4 space-y-2 font-semibold">
                <li>
                    <a href="{{ route('home') }}"
                       class="block text-gray-700 px-4 py-2 hover:bg-gray-100 {{ Request::is('/') ? 'text-blue-600 font-semibold' : '' }}">
                        BERANDA
                    </a>
                </li>
                <li class="px-4 py-2">
                    <details class="group">
                        <summary class="cursor-pointer text-gray-700 hover:text-blue-600">PROFIL</summary>
                        <ul class="ml-4 mt-2 space-y-1">
                            <li><a href="{{ route('profile.vision-mission') }}"
                                   class="{{ Request::is('profil/visi-misi') ? 'text-blue-600 font-semibold' : '' }}">Visi & Misi</a></li>
                            <li><a>Tugas & Fungsi</a></li>
                            <li><a>Profil Pimpinan</a></li>
                            <li><a>Daftar Pegawai</a></li>
                            <li><a href="{{ route('profile.facilities') }}"
                                   class="{{ Request::is('profil/fasilitas') ? 'text-blue-600 font-semibold' : '' }}">Sarana &
                                    Prasarana</a></li>
                            <li><a>Prestasi & Inovasi</a></li>
                            <li><a href="{{ route('profile.legal-basis') }}"
                                   class="{{ Request::is('profil/dasar-hukum') ? 'text-blue-600 font-semibold' : '' }}">Dasar Hukum</a></li>
                        </ul>
                    </details>
                </li>
                <li>
                    <a href="{{ route('services.index') }}"
                       class="block text-gray-700 px-4 py-2 hover:bg-gray-100 {{ Request::is('layanan*') ? 'text-blue-600 font-semibold' : '' }}">
                        LAYANAN
                    </a>
                </li>
                <li>
                    <a href="{{ route('informations.index') }}"
                       class="block text-gray-700 px-4 py-2 hover:bg-gray-100 {{ Request::is('informasi*') ? 'text-blue-600 font-semibold' : '' }}">
                        INFORMASI
                    </a>
                </li>
                <li>
                    <a href="{{ route('agenda.index') }}"
                       class="block text-gray-700 px-4 py-2 hover:bg-gray-100 {{ Request::is('agenda*') ? 'text-blue-600 font-semibold' : '' }}">
                        AGENDA
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    // Basic toggle using Alpine.js or Vanilla JS
    const navToggleBtn = document.getElementById('navToggleBtn');
    const mobileNav = document.getElementById('mobileNav');

    navToggleBtn?.addEventListener('click', () => {
        mobileNav.classList.toggle('hidden');
    });
</script>
