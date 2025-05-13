<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'email' => 'adminMPP@MPP.com',
                'password' => Hash::make('AdminMPP'),
                'username' => 'AdminMPP',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'adminMPP2@MPP.com',
                'password' => Hash::make('AdminMPP2'),
                'username' => 'AdminMPP2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'adminMPP3@mpp.com',
                'password' => Hash::make('AdminMPP3'),
                'username' => 'AdminMPP3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
