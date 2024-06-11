<?php
namespace App\Http\Controllers;

use App\Models\Hewan;
use App\Models\Adopsi;
use Illuminate\Http\Request;
use App\Models\ApprovedAdopsi;
use Illuminate\Support\Facades\DB;

class AdopsiController extends Controller
{
    public function index()
    {
        $adopsi = Adopsi::whereHas('hewan', function ($query) {
            $query->where('shelter_id', auth()->user()->shelter->id);
        })->where('status', 'pending')->get();

        return view('mitra.adopsi.index', compact('adopsi'));
    }
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
            'user_id' => auth()->user()->id, // Assuming the user is authenticated
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
    public function approve(Adopsi $adopsi)
    {
        // Update status adopsi
        $adopsi->update(['status' => 'approved']);

        // Call stored procedure to update hewan status to 'booking'
        DB::statement('CALL UpdateHewanStatus(?, ?)', [$adopsi->hewan_id, 'booking']);

        // Insert approved adopsi into approved_adopsi table
        ApprovedAdopsi::create([
            'hewan_id' => $adopsi->hewan_id,
            'user_id' => $adopsi->user_id,
            'nama_lengkap' => $adopsi->nama_lengkap,
            'email' => $adopsi->email,
            'alamat' => $adopsi->alamat,
            'nomor_whatsapp' => $adopsi->nomor_whatsapp,
        ]);

        // Delete original adopsi request
        $adopsi->delete();

        // Redirect to WhatsApp link
        return redirect($this->createWhatsappLink($adopsi, 'approved'));
    }

    public function reject(Adopsi $adopsi)
    {
        // Update status adopsi
        $adopsi->update(['status' => 'rejected']);

        // Call stored procedure to update hewan status to 'tersedia'
        DB::statement('CALL UpdateHewanStatus(?, ?)', [$adopsi->hewan_id, 'tersedia']);

        // Redirect to WhatsApp link
        return redirect($this->createWhatsappLink($adopsi, 'rejected'));
    }

    public function teradopsi(ApprovedAdopsi $approvedAdopsi)
    {
        // Delete approved adopsi
        $approvedAdopsi->delete();

        // Call stored procedure to update hewan status to 'teradopsi'
        DB::statement('CALL UpdateHewanStatus(?, ?)', [$approvedAdopsi->hewan_id, 'teradopsi']);

        // Redirect to WhatsApp link
        return redirect($this->createWhatsappLink($approvedAdopsi, 'teradopsi'));
    }

    public function cancel(ApprovedAdopsi $approvedAdopsi)
    {
        // Delete approved adopsi
        $approvedAdopsi->delete();

        // Call stored procedure to update hewan status to 'tersedia'
        DB::statement('CALL UpdateHewanStatus(?, ?)', [$approvedAdopsi->hewan_id, 'tersedia']);

        // Redirect to adopsi index with success message
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
        }

        $phone = $adopsi->nomor_whatsapp;
        $encodedMessage = urlencode($message);

        return "https://wa.me/{$phone}?text={$encodedMessage}";
    }

    public function showApprovedAdopsi()
    {
        $approvedAdopsi = ApprovedAdopsi::whereHas('hewan', function ($query) {
            $query->where('shelter_id', auth()->user()->shelter->id);
        })->get();

        return view('mitra.adopsi.approved', compact('approvedAdopsi'));
    }
}
