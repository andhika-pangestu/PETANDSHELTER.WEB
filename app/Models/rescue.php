<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rescue extends Model
{
    use HasFactory;

    protected $table = 'rescues';

    protected $fillable = [
        'namaHewan',
        'bbHewan',
        'jenisHewan',
        'deskripsiHewan',
        'kondisiHewan',
        'tglLokasiPenemuan',
        'kondisiLingkungan',
        'fotoHewan',
        'fotoLokasi',
        'namaPelapor',
        'usiaPelapor',
        'nomorTelp',
        'jenisKelamin'
    ];
}
