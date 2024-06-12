<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shelter extends Model
{
    use HasFactory;

    protected $table = 'shelter';

    protected $fillable = ['user_id', 'foto', 'nama_shelter', 'alamat_jalan', 'kota', 'jam_buka', 'hari_buka', 'nomor_telepon'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function hewan()
    {
        return $this->hasMany(Hewan::class);
    }
}
