<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiSeeder extends Seeder
{
    public function run()
    {
        DB::table('transaksi')->insert([
            [
                'kode_transaksi' => 'TRX001',
                'tanggal_transaksi' => '2024-05-01',
                'total_pembayaran' => 12500,
                'id_pelanggan' => 1,
                'id_metode_pembayaran' => 1,
                'tanggal_cetak' => '2024-05-01',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_transaksi' => 'TRX002',
                'tanggal_transaksi' => '2024-05-02',
                'total_pembayaran' => 15000,
                'id_pelanggan' => 2,
                'id_metode_pembayaran' => 2,
                'tanggal_cetak' => '2024-05-02',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
