<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PelangganSeeder::class,
            MetodePembayaranSeeder::class,
            ObatSeeder::class,
            TransaksiSeeder::class,
            DetailTransaksiSeeder::class,
            RolesTableSeeder::class,
            UsersTableSeeder::class,
        ]);
    }
}
