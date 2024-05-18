<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $password_default = "123";
        DB::table('users')->insert([
            [
                'nama' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make($password_default), // Replace 'password' with a secure password
                'role_id' => 1, // Assuming role_id 1 is for Admin
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Regular User',
                'email' => 'user@example.com',
                'password' => Hash::make($password_default), // Replace 'password' with a secure password
                'role_id' => 2, // Assuming role_id 2 is for User
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
