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

            [
                'kode_transaksi' => 'TRX003',
                'tanggal_transaksi' => '2024-05-03',
                'total_pembayaran' => 20000,
                'id_pelanggan' => 3,
                'id_metode_pembayaran' => 3,
                'tanggal_cetak' => '2024-05-03',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_transaksi' => 'TRX004',
                'tanggal_transaksi' => '2024-05-04',
                'total_pembayaran' => 25000,
                'id_pelanggan' => 4,
                'id_metode_pembayaran' => 4,
                'tanggal_cetak' => '2024-05-04',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_transaksi' => 'TRX005',
                'tanggal_transaksi' => '2024-05-05',
                'total_pembayaran' => 30000,
                'id_pelanggan' => 5,
                'id_metode_pembayaran' => 5,
                'tanggal_cetak' => '2024-05-05',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_transaksi' => 'TRX006',
                'tanggal_transaksi' => '2024-05-06',
                'total_pembayaran' => 35000,
                'id_pelanggan' => 6,
                'id_metode_pembayaran' => 6,
                'tanggal_cetak' => '2024-05-06',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_transaksi' => 'TRX007',
                'tanggal_transaksi' => '2024-05-07',
                'total_pembayaran' => 40000,
                'id_pelanggan' => 7,
                'id_metode_pembayaran' => 7,
                'tanggal_cetak' => '2024-05-07',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_transaksi' => 'TRX008',
                'tanggal_transaksi' => '2024-05-08',
                'total_pembayaran' => 45000,
                'id_pelanggan' => 8,
                'id_metode_pembayaran' => 8,
                'tanggal_cetak' => '2024-05-08',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_transaksi' => 'TRX009',
                'tanggal_transaksi' => '2024-05-09',
                'total_pembayaran' => 50000,
                'id_pelanggan' => 9,
                'id_metode_pembayaran' => 9,
                'tanggal_cetak' => '2024-05-09',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_transaksi' => 'TRX010',
                'tanggal_transaksi' => '2024-05-10',
                'total_pembayaran' => 55000,
                'id_pelanggan' => 10,
                'id_metode_pembayaran' => 10,
                'tanggal_cetak' => '2024-05-10',
                'created_at' => now(),
                'updated_at' => now()
            ],


        ]);
    }
}
