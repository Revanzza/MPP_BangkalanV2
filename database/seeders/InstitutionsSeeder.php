<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class InstitutionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('institutions')->insert([
            [
                'nama_institution' => 'Dinas Kesehatan Bangkalan',
                'alamat_institution' => 'Jl. Kesehatan No. 10',
                'website_institution' => 'https://dinkes.kota.go.id',
                'logo_institution' => 'dinkes-logo.png',
                'no_institution' => '021-1234567',
                'IDUser' => 2, // Sesuai dengan ID user dinkes
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_institution' => 'Dinas Pendidikan Bangkalan',
                'alamat_institution' => 'Jl. Pendidikan No. 5',
                'website_institution' => 'https://disdik.kota.go.id',
                'logo_institution' => 'disdik-logo.png',
                'no_institution' => '021-7654321',
                'IDUser' => 3, // Sesuai dengan ID user disdik
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_institution' => 'Dinas Perhubungan Bangkalan',
                'alamat_institution' => 'Jl. Transportasi No. 8',
                'website_institution' => 'https://dishub.kota.go.id',
                'logo_institution' => 'dishub-logo.png',
                'no_institution' => '021-9876543',
                'IDUser' => 4, // Sesuai dengan ID user dishub
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
