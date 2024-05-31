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
        'id_pelanggan',
        'id_metode_pembayaran',
        'total_pembayaran',
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

    public static function generateKodeTransaksi()
    {
        $latestTransaksi = self::orderBy('id_transaksi', 'desc')->first();

        if (!$latestTransaksi) {
            $number = 1;
        } else {
            $lastNumber = (int) substr($latestTransaksi->kode_transaksi, 4);
            $number = $lastNumber + 1;
        }

        return 'TRX' . str_pad($number, 3, '0', STR_PAD_LEFT);
    }
}
