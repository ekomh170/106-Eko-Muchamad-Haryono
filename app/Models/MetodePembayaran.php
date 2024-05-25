<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodePembayaran extends Model
{
    use HasFactory;

    protected $table = 'metode_pembayaran';

    protected $primaryKey = 'id_metode_pembayaran';

    protected $fillable = [
        'kode_metode_pembayaran',
        'nama_metode_pembayaran',
    ];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_metode_pembayaran', 'id_metode_pembayaran');
    }
}
