<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetodePembayaranSeeder extends Seeder
{
    public function run()
    {
        DB::table('metode_pembayaran')->insert([
            [
                'kode_metode_pembayaran' => 'CASH',
                'nama_metode_pembayaran' => 'Cash',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_metode_pembayaran' => 'CC',
                'nama_metode_pembayaran' => 'Credit Card',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
