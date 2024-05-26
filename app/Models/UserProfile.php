<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = [
        'alamat', 'nomor_telepon', 'tanggal_lahir', 'jenis_kelamin'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
