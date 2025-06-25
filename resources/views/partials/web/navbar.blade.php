<nav class="sticky top-0 z-50 bg-white shadow">
    <div class="container flex items-center justify-between h-16 px-4 mx-auto">
        <!-- Logo -->
        <a href="/" class="flex items-center gap-3">
            <img src="{{ asset('images/mpp-bangkalan.png') }}" alt="Logo" class="h-12">
            <div>
                <strong class="block leading-tight">MAL PELAYANAN PUBLIK</strong>
                <span class="text-sm">Kabupaten Bangkalan</span>
            </div>
        </a>
        <!-- Desktop Navigation -->
        <ul class="items-center hidden gap-8 font-semibold md:flex">
            <li>
                <a href="{{ route('home') }}" class="hover:text-blue-600 transition {{ Request::is('/') ? 'text-blue-600' : 'text-gray-800' }}">BERANDA</a>
            </li>
            <li class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="flex items-center text-gray-800 transition hover:text-blue-600 focus:outline-none">
                    PROFIL
                    <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.584l3.71-4.354a.75.75 0 111.14.976l-4.25 5a.75.75 0 01-1.14 0l-4.25-5a.75.75 0 01.02-1.06z" clip-rule="evenodd"/>
                    </svg>
                </button>
                <ul x-show="open" @click.away="open = false" x-transition
                    class="absolute left-0 z-50 w-56 mt-2 text-left bg-white border rounded shadow-lg"
                    style="display: none;">
                    <li><a href="{{ route('profile.vision-mission') }}" class="block px-4 py-2 hover:bg-gray-100 {{ Request::is('profil/visi-misi') ? 'text-blue-600 font-semibold' : '' }}">Visi & Misi</a></li>
                    <li><a href="{{ route('profile.tugas-fungsi') }}" class="block px-4 py-2 hover:bg-gray-100 {{ Request::is('profil/tugas-fungsi') ? 'text-blue-600 font-semibold' : '' }}">Tugas & Fungsi</a></li>
                    <li><a href="{{ route('profile.leadership') }}" class="block px-4 py-2 hover:bg-gray-100 {{ Request::is('profil/leadership') ? 'text-blue-600 font-semibold' : '' }}">Profil Pimpinan</a></li>
                    <li><a href="{{ route('profile.facilities') }}" class="block px-4 py-2 hover:bg-gray-100 {{ Request::is('profil/fasilitas') ? 'text-blue-600 font-semibold' : '' }}">Sarana & Prasarana</a></li>
                    <li><a href="{{ route('profile.prestasi-inovasi') }}" class="block px-4 py-2 hover:bg-gray-100 {{ Request::is('profil/prestasi-inovasi') ? 'text-blue-600 font-semibold' : '' }}">Prestasi & Inovasi</a></li>
                    <li><a href="{{ route('profile.legal-basis') }}" class="block px-4 py-2 hover:bg-gray-100 {{ Request::is('profil/dasar-hukum') ? 'text-blue-600 font-semibold' : '' }}">Dasar Hukum</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('services.index') }}" class="hover:text-blue-600 transition {{ Request::is('layanan*') ? 'text-blue-600' : 'text-gray-800' }}">LAYANAN</a>
            </li>
            <li>
                <a href="{{ route('informations.index') }}" class="hover:text-blue-600 transition {{ Request::is('informasi*') ? 'text-blue-600' : 'text-gray-800' }}">INFORMASI</a>
            </li>
            <li>
                <a href="{{ route('agenda.index') }}" class="hover:text-blue-600 transition {{ Request::is('agenda*') ? 'text-blue-600' : 'text-gray-800' }}">AGENDA</a>
            </li>
        </ul>
        <!-- Mobile Button -->
        <button class="text-gray-800 md:hidden focus:outline-none" id="navToggleBtn">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>
    <!-- Mobile Nav -->
    <div class="hidden md:hidden" id="mobileNav">
        <ul class="flex flex-col gap-2 px-4 py-2 font-semibold bg-white border-t">
            <li>
                <a href="{{ route('home') }}" class="block py-2 {{ Request::is('/') ? 'text-blue-600 font-bold' : 'text-gray-800' }}">BERANDA</a>
            </li>
            <li>
                <details class="group">
                    <summary class="py-2 text-gray-800 cursor-pointer hover:text-blue-600">PROFIL</summary>
                    <ul class="mt-2 ml-4 space-y-1">
                        <li><a href="{{ route('profile.vision-mission') }}" class="{{ Request::is('profil/visi-misi') ? 'text-blue-600 font-semibold' : '' }}">Visi & Misi</a></li>
                        <li><a href="{{ route('profile.tugas-fungsi') }}" class="{{ Request::is('profil/tugas-fungsi') ? 'text-blue-600 font-semibold' : '' }}">Tugas & Fungsi</a></li>
                        <li><a href="{{ route('profile.leadership') }}" class="{{ Request::is('profil/leadership') ? 'text-blue-600 font-semibold' : '' }}">Profil Pimpinan</a></li>
                        <li><a href="{{ route('profile.facilities') }}" class="{{ Request::is('profil/fasilitas') ? 'text-blue-600 font-semibold' : '' }}">Sarana & Prasarana</a></li>
                        <li><a href="{{ route('profile.prestasi-inovasi') }}" class="{{ Request::is('profil/prestasi-inovasi') ? 'text-blue-600 font-semibold' : '' }}">Prestasi & Inovasi</a></li>
                        <li><a href="{{ route('profile.legal-basis') }}" class="{{ Request::is('profil/dasar-hukum') ? 'text-blue-600 font-semibold' : '' }}">Dasar Hukum</a></li>
                    </ul>
                </details>
            </li>
            <li>
                <a href="{{ route('services.index') }}" class="block py-2 {{ Request::is('layanan*') ? 'text-blue-600 font-bold' : 'text-gray-800' }}">LAYANAN</a>
            </li>
            <li>
                <a href="{{ route('informations.index') }}" class="block py-2 {{ Request::is('informasi*') ? 'text-blue-600 font-bold' : 'text-gray-800' }}">INFORMASI</a>
            </li>
            <li>
                <a href="{{ route('agenda.index') }}" class="block py-2 {{ Request::is('agenda*') ? 'text-blue-600 font-bold' : 'text-gray-800' }}">AGENDA</a>
            </li>
        </ul>
    </div>
</nav>
<script>
    // Toggle mobile nav
    const navToggleBtn = document.getElementById('navToggleBtn');
    const mobileNav = document.getElementById('mobileNav');
    navToggleBtn?.addEventListener('click', () => {
        mobileNav.classList.toggle('hidden');
    });
</script>