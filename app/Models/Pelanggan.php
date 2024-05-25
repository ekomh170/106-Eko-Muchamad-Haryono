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

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_pelanggan', 'id_pelanggan');
    }
}
