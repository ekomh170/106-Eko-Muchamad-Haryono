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
            [
                'kode_obat' => 'OBT003',
                'nama_obat' => 'Ibuprofen',
                'harga_obat' => 6000,
                'jenis_obat' => 'Tablet',
                'stok_obat' => 150,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_obat' => 'OBT004',
                'nama_obat' => 'Cetirizine',
                'harga_obat' => 8500,
                'jenis_obat' => 'Tablet',
                'stok_obat' => 100,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_obat' => 'OBT005',
                'nama_obat' => 'Ranitidine',
                'harga_obat' => 7000,
                'jenis_obat' => 'Kapsul',
                'stok_obat' => 120,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_obat' => 'OBT006',
                'nama_obat' => 'Diphenhydramine',
                'harga_obat' => 9000,
                'jenis_obat' => 'Tablet',
                'stok_obat' => 80,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_obat' => 'OBT007',
                'nama_obat' => 'Loratadine',
                'harga_obat' => 8000,
                'jenis_obat' => 'Tablet',
                'stok_obat' => 90,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_obat' => 'OBT008',
                'nama_obat' => 'Aspirin',
                'harga_obat' => 5500,
                'jenis_obat' => 'Tablet',
                'stok_obat' => 200,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_obat' => 'OBT009',
                'nama_obat' => 'Chlorpheniramine',
                'harga_obat' => 9500,
                'jenis_obat' => 'Kapsul',
                'stok_obat' => 70,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_obat' => 'OBT010',
                'nama_obat' => 'Diclofenac',
                'harga_obat' => 7000,
                'jenis_obat' => 'Tablet',
                'stok_obat' => 110,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_obat' => 'OBT011',
                'nama_obat' => 'Pseudoephedrine',
                'harga_obat' => 8500,
                'jenis_obat' => 'Tablet',
                'stok_obat' => 100,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_obat' => 'OBT012',
                'nama_obat' => 'Guaifenesin',
                'harga_obat' => 8000,
                'jenis_obat' => 'Kapsul',
                'stok_obat' => 120,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
