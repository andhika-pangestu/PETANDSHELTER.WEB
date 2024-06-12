<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rescue extends Model
{
    use HasFactory;

    protected $table = 'rescues';

    protected $fillable = [
        'namaHewan', 'bbHewan', 'jenisHewan', 'deskripsiHewan', 'kondisiHewan', 
        'tglLokasiPenemuan', 'kondisiLingkungan', 'fotoHewan', 'fotoLokasi', 
        'namaPelapor', 'usiaPelapor', 'nomorTelp', 'jenisKelamin', 'status'
    ];

    public function assignedJobs()
    {
        return $this->hasOne('App\Models\AssignedJobs');
    }
}

