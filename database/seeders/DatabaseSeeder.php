<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            RolesSeeder::class,
            UsersTableSeeder::class,
            UsersProfilesSeeder::class,

            PelangganSeeder::class,
            MetodePembayaranSeeder::class,
            ObatSeeder::class,
            TransaksiSeeder::class,
            DetailTransaksiSeeder::class,
        ]);
    }
}
