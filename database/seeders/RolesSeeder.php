<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['nama' => 'Administrator', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Kreator', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Apoteker', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Pegawai', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
