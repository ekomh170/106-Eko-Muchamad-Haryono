<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersProfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menambahkan entri profil pengguna ke tabel user_profiles
        DB::table('user_profiles')->insert([
            [
                'user_id' => 1, // ID pengguna Pengguna 1
                'alamat' => 'Jl. Puspanegara No .99',
                'nomor_telepon' => '08123456781',
                'tanggal_lahir' => '2003-03-29',
                'jenis_kelamin' => 'Laki-laki',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2, // ID pengguna Pengguna 2
                'alamat' => 'Jl. Rengkasan Sari No. 2',
                'nomor_telepon' => '08123456782',
                'tanggal_lahir' => '1998-01-02',
                'jenis_kelamin' => 'Laki - Laki',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3, // ID pengguna Pengguna 3
                'alamat' => 'Jl. Merdeka No. 3',
                'nomor_telepon' => '08123456783',
                'tanggal_lahir' => '2001-01-03',
                'jenis_kelamin' => 'Perempuan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4, // ID pengguna Pengguna 4
                'alamat' => 'Jl. Langsawati No. 4',
                'nomor_telepon' => '08123456784',
                'tanggal_lahir' => '2003-01-04',
                'jenis_kelamin' => 'Perempuan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 5, // ID pengguna Pengguna 5
                'alamat' => 'Jl. Tajur No. 5',
                'nomor_telepon' => '08123456785',
                'tanggal_lahir' => '2002-01-05',
                'jenis_kelamin' => 'Laki-laki',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
