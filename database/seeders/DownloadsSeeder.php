<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DownloadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('downloads')->insert([
            [
                'judul' => 'Panduan Penggunaan MPP Digital',
                'file_path' => 'panduan-mpp.pdf',
                'keterangan' => 'Buku panduan penggunaan platform MPP Digital untuk masyarakat',
                'IDUser' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
            [
                'judul' => 'Formulir Permohonan Surat Kesehatan',
                'file_path' => 'form-surat-kesehatan.docx',
                'keterangan' => 'Formulir yang harus diisi untuk permohonan surat kesehatan',
                'IDUser' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
            [
                'judul' => 'Juknis PPDB 2023',
                'file_path' => 'juknis-ppdb-2023.pdf',
                'keterangan' => 'Petunjuk teknis penerimaan peserta didik baru tahun 2023',
                'IDUser' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
