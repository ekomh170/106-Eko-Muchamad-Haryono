<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';

    protected $primaryKey = 'id_transaksi';

    protected $fillable = [
        'kode_transaksi',
        'tanggal_transaksi',
        'total_pembayaran',
        'id_pelanggan',
        'id_metode_pembayaran',
        'tanggal_cetak',
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan', 'id_pelanggan');
    }

    public function metodePembayaran()
    {
        return $this->belongsTo(MetodePembayaran::class, 'id_metode_pembayaran', 'id_metode_pembayaran');
    }

    public function detailTransaksi()
    {
        return $this->hasMany(DetailTransaksi::class, 'id_transaksi', 'id_transaksi');
    }
}
