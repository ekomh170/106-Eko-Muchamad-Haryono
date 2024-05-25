<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailTransaksiSeeder extends Seeder
{
    public function run()
    {
        DB::table('detail_transaksi')->insert([
            [
                'jumlah_obat' => 2,
                'id_transaksi' => 1,
                'id_obat' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'jumlah_obat' => 1,
                'id_transaksi' => 1,
                'id_obat' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'jumlah_obat' => 3,
                'id_transaksi' => 2,
                'id_obat' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
