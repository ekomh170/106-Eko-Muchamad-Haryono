<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    public function run()
    {
        DB::table('pelanggan')->insert([
            [
                'kode_pelanggan' => 'PLG001',
                'nama_pelanggan' => 'John Doe',
                'alamat' => '123 Main Street',
                'no_telp' => '081234567890',
                'no_wa' => '081234567890',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_pelanggan' => 'PLG002',
                'nama_pelanggan' => 'Jane Smith',
                'alamat' => '456 Oak Avenue',
                'no_telp' => '081234567891',
                'no_wa' => '081234567891',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
