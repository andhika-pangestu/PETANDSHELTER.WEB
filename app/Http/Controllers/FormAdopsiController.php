<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormAdopsiController extends Controller
{
    public function prosesFormAdopsi(Request $request)
    {
        // Memproses data yang diterima dari formulir
        $namaLengkap = $request->input('nama_lengkap');
        $email = $request->input('email');
        $alamat = $request->input('alamat');
        $nomorWhatsapp = $request->input('nomor_whatsapp');
        $hewanPertama = $request->input('hewan_pertama');
        $jenisRumah = $request->input('jenis_rumah');
        $alasanTertarik = $request->input('alasan_tertarik');
        $hewanLain = $request->input('hewan_lain');
        $kepemilikanRumah = $request->input('kepemilikan_rumah');
        $lokasiHewan = $request->input('lokasi_hewan');
        $dokterHewan = $request->input('dokter_hewan');
        $halamanBerpagar = $request->input('halaman_berpagar');
        $jumlahOrangDewasa = $request->input('jumlah_orang_dewasa');
        $jumlahAnak = $request->input('jumlah_anak');
        $alergiBulu = $request->input('alergi_bulu');
        $lokasiHewan = $request->input('lokasi_hewan');
        $bawaPulang = $request->input('bawa_pulang');
        $perawatan = $request->input('perawatan');
        $jemputHewan = $request->input('jemput_hewan');
        $laporanFoto = $request->input('laporan_foto');
        $hubungiKembali = $request->input('hubungi_kembali');
        $informasiRelevan = $request->input('informasi_relevan');
        $pertanyaanTambahan = $request->input('pertanyaan_tambahan');
        
    }
}
