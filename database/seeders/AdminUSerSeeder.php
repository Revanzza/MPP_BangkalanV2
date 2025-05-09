<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUSerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'Dinas Kesehatan',
                'email'=> 'adminDinkes@mpp.com',
                'password' => Hash::make('AdminDinkes567'),
                'name' => 'Admin Dinkes',
                'role' => 'instansi',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'username' => 'Dinas Pendidikan',
                'email'=> 'adminDisdik@mpp.com',
                'password' => Hash::make('AdminDisdik567'),
                'name' => 'Admin Disdik',
                'role' => 'instansi',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'username' => 'Dinas Perhubungan',
                'email'=> 'adminDishub@mpp.com',
                'password' => Hash::make('AdminDishub567'),
                'name' => 'Admin Perhubungan',
                'role' => 'instansi',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
