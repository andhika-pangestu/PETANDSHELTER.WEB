<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User; // Import model User

class Tips extends Model
{
    use HasFactory;

    protected $table = 'tips';

    protected $fillable = [
        'judul', 'deskripsi', 'gambar', 'tanggal',
    ];

    // Definisikan relasi dengan pengguna (user)
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
