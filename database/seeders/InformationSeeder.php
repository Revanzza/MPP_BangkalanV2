<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('information')->insert([
            [
                'IDUser' => 1,
                'judul' => 'Peluncuran MPP Digital',
                'isi' => 'Pemerintah Kota meluncurkan MPP Digital untuk memudahkan masyarakat mengakses layanan publik secara online.',
                'gambar' => 'mpp-digital.jpg',
                'kategori' => 'Pengumuman',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'IDUser' => 1,
                'judul' => 'Jam Operasional MPP',
                'isi' => 'MPP buka setiap hari kerja dari jam 08.00 - 16.00 WIB, kecuali hari libur nasional.',
                'gambar' => 'jam-operasional.jpg',
                'kategori' => 'Informasi',
                'created_at' => now(),
                'updated_at' => now()
            ],
            
            [
                'IDUser' => 2,
                'judul' => 'Program Vaksinasi Gratis',
                'isi' => 'Dinas Kesehatan menyelenggarakan vaksinasi gratis untuk lansia dan tenaga kesehatan di puskesmas terdekat.',
                'gambar' => 'vaksinasi.jpg',
                'kategori' => 'Kesehatan',
                'created_at' => now(),
                'updated_at' => now()
            ],
            
            [
                'IDUser' => 3,
                'judul' => 'Jadwal PPDB 2023',
                'isi' => 'Pendaftaran Peserta Didik Baru tahun ajaran 2023/2024 akan dibuka mulai 1 Juni 2023.',
                'gambar' => 'ppdb.jpg',
                'kategori' => 'Pendidikan',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
