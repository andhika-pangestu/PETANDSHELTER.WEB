<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Tips extends Model
{
    use HasFactory;

    protected $table = 'tips';

    protected $fillable = [
        'judul', 'deskripsi', 'gambar', 'tanggal', 'user_id',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
