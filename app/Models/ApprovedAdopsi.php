<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprovedAdopsi extends Model
{
    use HasFactory;

    protected $table = 'approved_adopsi';

    protected $fillable = [
        'hewan_id',
        'user_id',
        'nama_lengkap',
        'email',
        'alamat',
        'nomor_whatsapp',
    ];

    public function hewan()
    {
        return $this->belongsTo(Hewan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
