<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'username' => 'adminMPP@mpp.com',
            'email'=> 'adminMPP@mpp.com',
            'password' => Hash::make('AdminMPP567'), // ganti dengan password yang kamu mau
            'name'     => 'Admin MPP',
            'role'     => 'mpp',
        ]);
    }
}
