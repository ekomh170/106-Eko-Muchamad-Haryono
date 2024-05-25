<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    protected $table = 'obat';

    protected $primaryKey = 'id_obat';

    protected $fillable = [
        'kode_obat',
        'nama_obat',
        'harga_obat',
        'jenis_obat',
        'stok_obat',
    ];

    public function detailTransaksi()
    {
        return $this->hasMany(DetailTransaksi::class, 'id_obat', 'id_obat');
    }
}
