<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shelter;
use Auth;

class ShelterController extends Controller
{
    public function index()
    {
        $shelter = Auth::user()->shelter;
        return view('mitra.shelter.index', compact('shelter'));
    }

    public function create()
    {
            // Cek apakah user sudah memiliki shelter
    if (Auth::user()->shelter) {
        return redirect()->route('mitra.shelter.index')->with('warning', 'Anda sudah memiliki shelter.');
    }

    return view('mitra.shelter.create');
    }

    public function store(Request $request)
    {
        // Cek apakah user sudah memiliki shelter
        if (Auth::user()->shelter) {
            return redirect()->route('mitra.shelter.index')->with('warning', 'Anda sudah memiliki shelter.');
        }
    
        $request->validate([
            'foto' => 'nullable|image',
            'nama_shelter' => 'required|string|max:255',
            'alamat_jalan' => 'required|string|max:255',
            'kota' => 'required|string|max:255',
            'jam_buka' => 'required',
            'hari_buka' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:15',
        ]);
    
        $shelter = new Shelter;
        $shelter->user_id = Auth::id();
    
        if ($request->hasFile('foto')) {
            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('uploads'), $fileName);
            $shelter->foto = $fileName;
        }
    
        $shelter->nama_shelter = $request->nama_shelter;
        $shelter->alamat_jalan = $request->alamat_jalan;
        $shelter->kota = $request->kota;
        $shelter->jam_buka = $request->jam_buka;
        $shelter->hari_buka = $request->hari_buka;
        $shelter->nomor_telepon = $request->nomor_telepon;
        $shelter->save();
    
        return redirect()->route('mitra.shelter.index')->with('success', 'Shelter berhasil dibuat.');
    }

    public function edit(Shelter $shelter)
    {
        return view('mitra.shelter.edit', compact('shelter'));
    }

    public function update(Request $request, Shelter $shelter)
    {
        $request->validate([
            'foto' => 'nullable|image',
            'nama_shelter' => 'required|string|max:255',
            'alamat_jalan' => 'required|string|max:255',
            'kota' => 'required|string|max:255',
            'jam_buka' => 'required',
            'hari_buka' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:15',
        ]);

        if ($request->hasFile('foto')) {
            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('uploads'), $fileName);
            $shelter->foto = $fileName;
        }

        $shelter->nama_shelter = $request->nama_shelter;
        $shelter->alamat_jalan = $request->alamat_jalan;
        $shelter->kota = $request->kota;
        $shelter->jam_buka = $request->jam_buka;
        $shelter->hari_buka = $request->hari_buka;
        $shelter->nomor_telepon = $request->nomor_telepon;
        $shelter->save();

        return redirect()->route('mitra.shelter.index')->with('success', 'Shelter berhasil diperbarui.');
    }
}
