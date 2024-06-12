<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hewan;
use Auth;

class HewanController extends Controller
{
    public function index()
    {
        $shelter = Auth::user()->shelter;
        $hewan = Hewan::where('shelter_id', $shelter->id)->get();
        return view('mitra.hewan.index', compact('hewan'));
    }

    public function create()
    {
        return view('mitra.hewan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_hewan' => 'required|string|max:255',
            'jenis_hewan' => 'required|string|max:255',
            'foto' => 'nullable|image',
            'deskripsi' => 'required|string',
            'status' => 'required|in:tersedia,booking,teradopsi',
            'kesehatan' => 'required|in:sehat,cacat,rawat',

        ]);
    
        $hewan = new Hewan;
        $hewan->shelter_id = Auth::user()->shelter->id;
        $hewan->nama_hewan = $request->nama_hewan;
        $hewan->jenis_hewan = $request->jenis_hewan;
    
        if ($request->hasFile('foto')) {
            $fileName = $request->file('foto')->store('public/uploads');
            $hewan->foto = $fileName;
        }
    
        $hewan->deskripsi = $request->deskripsi;
        $hewan->status = $request->status;
        $hewan->kesehatan = $request->kesehatan;
        $hewan->save();
    
        return redirect()->route('mitra.hewan.index')->with('success', 'Hewan berhasil ditambahkan.');
    }
    public function edit(Hewan $hewan)
    {
        return view('mitra.hewan.edit', compact('hewan'));
    }

    public function update(Request $request, Hewan $hewan)
    {
        $request->validate([
            'nama_hewan' => 'required|string|max:255',
            'jenis_hewan' => 'required|string|max:255',
            'foto' => 'nullable|image',
            'deskripsi' => 'required|string',
            'status' => 'required|in:tersedia,booking,teradopsi',
            'kesehatan' => 'required|in:sehat,cacat,rawat',
        ]);
    
        if ($request->hasFile('foto')) {
            $fileName = $request->file('foto')->store('public/uploads');
            $hewan->foto = $fileName;
        }
    
        $hewan->nama_hewan = $request->nama_hewan;
        $hewan->jenis_hewan = $request->jenis_hewan;
        $hewan->deskripsi = $request->deskripsi;
        $hewan->status = $request->status;
        $hewan->kesehatan = $request->kesehatan;
        $hewan->save();
    
        return redirect()->route('mitra.hewan.index')->with('success', 'Hewan berhasil diperbarui.');
    }
    public function destroy(Hewan $hewan)
    {
        $hewan->delete();

        return redirect()->route('mitra.hewan.index')->with('success', 'Hewan berhasil dihapus.');
    }
}
