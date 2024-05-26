<?php

namespace Database\Seeders;

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
        // Kata sandi default
        $password_default = "123";

        // Menambahkan entri pengguna ke tabel users
        DB::table('users')->insert([
            [
                'nama' => 'Eko Muchamad Haryono',
                'email' => 'ekomh13@gmail.com',
                'password' => Hash::make($password_default), // Menggunakan Hash untuk mengenkripsi kata sandi
                'role_id' => 2, // ID peran pengguna biasa
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Administartor Apotik',
                'email' => 'adm_apotik@example.com',
                'password' => Hash::make($password_default), // Menggunakan Hash untuk mengenkripsi kata sandi
                'role_id' => 1, // ID peran pengguna biasa
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Liana Azzahra',
                'email' => 'liana@example.com',
                'password' => Hash::make($password_default), // Menggunakan Hash untuk mengenkripsi kata sandi
                'role_id' => 3, // ID peran pengguna biasa
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Dela Larasati',
                'email' => 'dela@example.com',
                'password' => Hash::make($password_default), // Menggunakan Hash untuk mengenkripsi kata sandi
                'role_id' => 4, // ID peran pengguna biasa
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Muhammad Akbar Maulana',
                'email' => 'akbar@example.com',
                'password' => Hash::make($password_default), // Menggunakan Hash untuk mengenkripsi kata sandi
                'role_id' => 3, // ID peran pengguna biasa
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
