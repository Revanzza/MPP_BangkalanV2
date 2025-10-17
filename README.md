# MPP Bangkalan

Deskripsi singkat  
Portal Mal Pelayanan Publik (MPP) Kabupaten Bangkalan — menampilkan agenda, informasi berita, sistem antrian, dan profil pimpinan. Backend: Laravel, admin: Filament, frontend: Tailwind.

## Fitur

-   Autentikasi (register/login/logout)
-   CRUD Agenda, Informasi, Antrian, Pimpinan (Filament)
-   Halaman publik: profil, daftar layanan, detail agenda
-   Upload foto dan file

## Teknologi

-   PHP, Laravel
-   MySQL
-   Filament
-   Tailwind CSS
-   Node/npm (build frontend)

## Persiapan & Instalasi (Windows)

1. Clone repository
    - git clone <repo-url>
    - cd MPP-BangkalanV2
2. Install dependensi
    - composer install
    - npm install
3. Konfigurasi environment
    - copy .env.example ke .env dan sesuaikan DB/APP_URL
    - jangan lupa tambahkan token untuk captcha
    - php artisan key:generate
4. Database
    - php artisan migrate
    - php artisan db:seed (jika ada seeder)
5. Storage & build
    - php artisan storage:link
    - npm run dev
6. Jalankan server
    - php artisan serve
    - buka http://127.0.0.1:8000

## Routes penting

-   /admin (Filament)
-   /profil
-   /layanan
-   /agenda
-   /information

## Kontribusi

-   Gunakan branch feature/<nama>
-   Pull request ke branch development
-   Sertakan deskripsi singkat dan screenshot bila perlu

## Kontak

-   Tim Pengembang / Nama: Muhammad Revanza, Desta Rizky A, Moch. Irfan Pramono
-   Email: -
