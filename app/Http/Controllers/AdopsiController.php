<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adopsi;
use App\Models\Hewan;

class AdopsiController extends Controller
{
    public function create(Hewan $hewan)
    {
        return view('adopsi.create', compact('hewan'));
    }

    public function store(Request $request, Hewan $hewan)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'alamat' => 'required|string',
            'nomor_whatsapp' => 'required|string|max:15',
            'hewan_pertama' => 'required|string',
            'jenis_rumah' => 'required|string',
            'alasan_tertarik' => 'required|string',
            'hewan_lain' => 'required|string',
            'kepemilikan_rumah' => 'required|string',
            'lokasi_hewan' => 'required|string',
            'dokter_hewan' => 'required|string',
            'halaman_berpagar' => 'required|string',
            'jumlah_orang_dewasa' => 'required|string',
            'jumlah_anak' => 'required|string',
            'alergi_bulu' => 'required|string',
            'lokasi_hewan_luar' => 'required|string',
        ]);

        Adopsi::create([
            'hewan_id' => $hewan->id,
            'user_id' => auth()->id(),
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'nomor_whatsapp' => $request->nomor_whatsapp,
            'hewan_pertama' => $request->hewan_pertama,
            'jenis_rumah' => $request->jenis_rumah,
            'alasan_tertarik' => $request->alasan_tertarik,
            'hewan_lain' => $request->hewan_lain,
            'kepemilikan_rumah' => $request->kepemilikan_rumah,
            'lokasi_hewan' => $request->lokasi_hewan,
            'dokter_hewan' => $request->dokter_hewan,
            'halaman_berpagar' => $request->halaman_berpagar,
            'jumlah_orang_dewasa' => $request->jumlah_orang_dewasa,
            'jumlah_anak' => $request->jumlah_anak,
            'alergi_bulu' => $request->alergi_bulu,
            'lokasi_hewan_luar' => $request->lokasi_hewan_luar,
            'status' => 'pending',
        ]);

        return redirect()->route('thank')->with('success', 'Permohonan adopsi berhasil dikirim.');
    }

    public function index()
    {
        $adopsi = Adopsi::whereHas('hewan', function ($query) {
            $query->where('shelter_id', auth()->user()->shelter->id);
        })->get();

        return view('mitra.adopsi.index', compact('adopsi'));
    }

    public function approve(Adopsi $adopsi)
    {
        $adopsi->update(['status' => 'approved']);
        $adopsi->hewan->update(['status' => 'booking']);

        return redirect($this->createWhatsappLink($adopsi, 'approved'));
    }

    public function reject(Adopsi $adopsi)
    {
        $adopsi->update(['status' => 'rejected']);

        return redirect($this->createWhatsappLink($adopsi, 'rejected'));
    }

    public function teradopsi(Adopsi $adopsi)
    {
        $adopsi->update(['status' => 'teradopsi']);
        $adopsi->hewan->update(['status' => 'teradopsi']);

        return redirect($this->createWhatsappLink($adopsi, 'teradopsi'));
    }

    public function cancel(Adopsi $adopsi)
    {
        $adopsi->update(['status' => 'pending']);
        $adopsi->hewan->update(['status' => 'tersedia']);

        return redirect()->route('mitra.adopsi.index')->with('success', 'Adopsi dibatalkan, status hewan kembali tersedia.');
    }

    protected function createWhatsappLink($adopsi, $status)
    {
        $message = '';
        switch ($status) {
            case 'approved':
                $message = "Permohonan adopsi Anda telah disetujui. Silakan datang dalam 3 hari ke depan pada jam operasional shelter.";
                break;
            case 'rejected':
                $message = "Permohonan adopsi Anda telah ditolak.";
                break;
            case 'teradopsi':
                $message = "Hewan adopsi Anda telah diambil. Terima kasih telah mengadopsi!";
                break;
            case 'canceled':
                $message = "Permohonan adopsi Anda telah dibatalkan.";
                break;
        }

        $phone = $adopsi->nomor_whatsapp;
        $encodedMessage = urlencode($message);

        return "https://wa.me/{$phone}?text={$encodedMessage}";
    }
}
