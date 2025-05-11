<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('agenda')->insert([
            // Agenda dari Admin MPP (IDUser = 1)
            [
                'nama_agenda' => 'Rapat Koordinasi MPP',
                'deskripsi' => 'Rapat koordinasi bulanan antar instansi di MPP',
                'waktu' => '2023-06-15 09:00:00',
                'tempat' => 'Ruang Rapat MPP Lt. 3',
                'IDUser' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
