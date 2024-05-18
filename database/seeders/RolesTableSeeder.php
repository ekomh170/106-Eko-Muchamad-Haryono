<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['nama' => 'Admin', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'User', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
