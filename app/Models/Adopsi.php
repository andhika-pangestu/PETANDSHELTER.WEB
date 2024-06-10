<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adopsi extends Model
{
    use HasFactory;

    protected $table = 'adopsi';

    protected $fillable = [
        'hewan_id', 'user_id', 'status', 'nama_lengkap', 'email', 'alamat', 'nomor_whatsapp',
        'hewan_pertama', 'jenis_rumah', 'alasan_tertarik', 'hewan_lain', 'kepemilikan_rumah',
        'lokasi_hewan', 'dokter_hewan', 'halaman_berpagar', 'jumlah_orang_dewasa', 'jumlah_anak',
        'alergi_bulu', 'lokasi_hewan_luar', 'bawa_pulang', 'perawatan', 'jemput_hewan',
        'laporan_foto', 'hubungi_kembali', 'informasi_relevan', 'pertanyaan_tambahan'
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
