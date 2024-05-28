<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'pelanggan';

    protected $primaryKey = 'id_pelanggan';

    protected $fillable = [
        'kode_pelanggan',
        'nama_pelanggan',
        'alamat',
        'no_telp',
        'no_wa',
    ];

    public static function generateKodePelanggan()
    {
        $latestPelanggan = self::orderBy('id_pelanggan', 'desc')->first();

        if (!$latestPelanggan) {
            $number = 1;
        } else {
            $lastNumber = (int) substr($latestPelanggan->kode_pelanggan, 4);
            $number = $lastNumber + 1;
        }

        return 'PLG-' . str_pad($number, 3, '0', STR_PAD_LEFT);
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_pelanggan', 'id_pelanggan');
    }
}
