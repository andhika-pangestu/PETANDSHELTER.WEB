<?php
namespace App\Http\Controllers;

use Auth;
use App\Models\Hewan;
use App\Models\Shelter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $shelter = new Shelter();
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

    public function show($id)
    {
        $shelter = Shelter::findOrFail($id);
        $hewan = Hewan::where('shelter_id', $id)->get();
        $otherShelters = Shelter::where('id', '!=', $id)->get();

        return view('shelter.show', compact('shelter', 'hewan', 'otherShelters'));
    }

    public function showAdoptedPets()
    {
        $shelterId = auth()->user()->shelter->id;

        $hewanTeradopsi = DB::table('view_hewan_teradopsi')->where('shelter_id', $shelterId)->get();

        return view('mitra.shelter.adopted_pets', compact('hewanTeradopsi'));
    }
}
