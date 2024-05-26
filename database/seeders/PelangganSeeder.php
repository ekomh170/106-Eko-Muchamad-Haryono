<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PelangganSeeder extends Seeder
{
    public function run()
    {
        $pelanggan = [];

        for ($i = 1; $i <= 20; $i++) {
            $pelanggan[] = [
                'kode_pelanggan' => 'PLG' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'nama_pelanggan' => $this->generateRandomName(),
                'alamat' => $this->generateRandomAddress(),
                'no_telp' => $this->generateRandomPhoneNumber(),
                'no_wa' => $this->generateRandomPhoneNumber(),
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        DB::table('pelanggan')->insert($pelanggan);
    }

    private function generateRandomName()
    {
        $firstNames = ['Ahmad', 'Budi', 'Citra', 'Dewi', 'Eko', 'Fitri', 'Gilang', 'Hesti', 'Irfan', 'Joko'];
        $lastNames = ['Santoso', 'Siregar', 'Wahyudi', 'Purnama', 'Siregar', 'Setiawan', 'Pratama', 'Lestari', 'Wijaya', 'Saputra'];
        
        return $firstNames[array_rand($firstNames)] . ' ' . $lastNames[array_rand($lastNames)];
    }

    private function generateRandomAddress()
    {
        $streets = ['Jl. Merdeka', 'Jl. Sudirman', 'Jl. Thamrin', 'Jl. Gatot Subroto', 'Jl. Ahmad Yani', 'Jl. MT Haryono', 'Jl. HR Rasuna Said', 'Jl. Diponegoro', 'Jl. Gajah Mada', 'Jl. Hayam Wuruk'];
        $cities = ['Jakarta', 'Bandung', 'Surabaya', 'Medan', 'Semarang', 'Makassar', 'Palembang', 'Denpasar', 'Yogyakarta', 'Malang'];
        
        return $streets[array_rand($streets)] . ' No. ' . rand(1, 100) . ', ' . $cities[array_rand($cities)];
    }

    private function generateRandomPhoneNumber()
    {
        return '08' . rand(1000000000, 9999999999);
    }
}
