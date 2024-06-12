<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hewan extends Model
{
    use HasFactory;

    protected $table = 'hewan';

    protected $fillable = [
        'shelter_id',
        'nama_hewan',
        'jenis_hewan',
        'foto',
        'deskripsi',
        'status', // Tambahkan ini
        'kesehatan', // Tambahkan ini
    ];

    public function shelter()
    {
        return $this->belongsTo(Shelter::class);
    }
}
