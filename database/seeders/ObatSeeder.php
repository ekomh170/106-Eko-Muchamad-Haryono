<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObatSeeder extends Seeder
{
    public function run()
    {
        DB::table('obat')->insert([
            [
                'kode_obat' => 'OBT001',
                'nama_obat' => 'Paracetamol',
                'harga_obat' => 5000,
                'jenis_obat' => 'Tablet',
                'stok_obat' => 100,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_obat' => 'OBT002',
                'nama_obat' => 'Amoxicillin',
                'harga_obat' => 7500,
                'jenis_obat' => 'Kapsul',
                'stok_obat' => 200,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
