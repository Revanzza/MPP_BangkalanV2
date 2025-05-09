<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            // Layanan Dinas Kesehatan (IDInstitution = 1)
            [
                'IDInstitution' => 1,
                'nama_layanan' => 'Pembuatan Surat Kesehatan',
                'deskripsi' => 'Layanan pembuatan surat keterangan kesehatan untuk berbagai keperluan',
                'persyaratan' => 'Fotokopi KTP, Pas foto 3x4, Surat pengantar dari kelurahan',
                'alur' => '1. Datang ke loket pendaftaran\n2. Isi formulir\n3. Melakukan pemeriksaan kesehatan\n4. Ambil surat di loket pengambilan',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'IDInstitution' => 1,
                'nama_layanan' => 'Vaksinasi Covid-19',
                'deskripsi' => 'Layanan vaksinasi untuk masyarakat umum',
                'persyaratan' => 'KTP, Kartu keluarga, Bagi lansia membawa surat keterangan dokter',
                'alur' => '1. Pendaftaran online/offline\n2. Screening kesehatan\n3. Vaksinasi\n4. Observasi 30 menit',
                'created_at' => now(),
                'updated_at' => now()
            ],
            
            // Layanan Dinas Pendidikan (IDInstitution = 2)
            [
                'IDInstitution' => 2,
                'nama_layanan' => 'Penerimaan Peserta Didik Baru',
                'deskripsi' => 'Pendaftaran siswa baru untuk sekolah negeri',
                'persyaratan' => 'Fotokopi akta kelahiran, KK, rapor, foto, sertifikat prestasi (jika ada)',
                'alur' => '1. Daftar online melalui website\n2. Unggah dokumen\n3. Verifikasi\n4. Pengumuman',
                'created_at' => now(),
                'updated_at' => now()
            ],
            
            // Layanan Dinas Perhubungan (IDInstitution = 3)
            [
                'IDInstitution' => 3,
                'nama_layanan' => 'Pembuatan SIM',
                'deskripsi' => 'Pembuatan Surat Izin Mengemudi',
                'persyaratan' => 'KTP asli, Pas foto, Surat keterangan sehat',
                'alur' => '1. Pendaftaran online\n2. Tes kesehatan\n3. Ujian teori\n4. Ujian praktik\n5. Pembayaran\n6. Pengambilan SIM',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
