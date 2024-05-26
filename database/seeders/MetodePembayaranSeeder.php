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
            [
                'kode_metode_pembayaran' => 'BCA',
                'nama_metode_pembayaran' => 'Bank Central Asia',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_metode_pembayaran' => 'BNI',
                'nama_metode_pembayaran' => 'Bank Negara Indonesia',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_metode_pembayaran' => 'BRI',
                'nama_metode_pembayaran' => 'Bank Rakyat Indonesia',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_metode_pembayaran' => 'MANDIRI',
                'nama_metode_pembayaran' => 'Bank Mandiri',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_metode_pembayaran' => 'BTN',
                'nama_metode_pembayaran' => 'Bank Tabungan Negara',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_metode_pembayaran' => 'DANAMON',
                'nama_metode_pembayaran' => 'Bank Danamon',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_metode_pembayaran' => 'OCBC',
                'nama_metode_pembayaran' => 'Overseas-Chinese Banking Corporation',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_metode_pembayaran' => 'HSBC',
                'nama_metode_pembayaran' => 'Hongkong and Shanghai Banking Corporation',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
        
    }
}
